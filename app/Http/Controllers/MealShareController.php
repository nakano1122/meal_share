<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Review;
use App\Models\Like;
use Cloudinary;

use Illuminate\Support\Facades\Auth;

class MealShareController extends Controller
{
    public function index(Post $post)
    {
        $post = $post->withCount('likes')->get();
        return view('posts.index')->with([
            'posts' => $post,
            ]);
    }
    
    public function create(Tag $tag, Category $category)
    {
        return view('posts.create')->with([
            'tags' => $tag->get(),
            'categories' => $category->get(),
        ]);
    }
    
    public function mypage(Post $post, Tag $tag, Review $review)
    {
        //ログインしているユーザの投稿を表示
        $post = Post::where('user_id','=',Auth::id())->get();
        return view('posts.mypage')->with([
            'posts' => $post,
        ]);
    }
    
    public function edit(Post $post, Tag $tag, Category $category)
    {
        return view('posts.edit')->with([
            'post' => $post,
            'tag' => $tag->get(),
            'categories' => $category->get(),
        ]);
    }
    
    public function store(Request $request, Post $post, Tag $tag)
    {
        $input_post = $request['post'];
        $input_tags = $request->tags_array;
        $meal_image_url = Cloudinary::upload($request->file('meal_image_url')->getRealPath())->getSecurePath();
        $input_post += ['meal_image_url' => $meal_image_url];
        $input_post += ['user_id' => $request->user()->id];
        $post->fill($input_post)->save();
        $post->tags()->syncWithoutDetaching($input_tags);
        return redirect('/');
    }
    
    public function show(Post $post, Review $review, Tag $tag)
    {
        $reviews = Review::where('post_id','=',$post->id)->get();
        $like_num = $post->likes()->count();
        return view('posts.show',compact('post','reviews','like_num'));
    }
    
    public function review_create(Request $request, Review $review)
    {
        $input = $request['review'];
        $review->fill($input)->save();
        return redirect('/posts/' . $review->post_id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/mypage');
    }
    
    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $input_tags = $request->tags_array;
        $meal_image_url = Cloudinary::upload($request->file('meal_image_url')->getRealPath())->getSecurePath();
        $input_post += ['meal_image_url' => $meal_image_url];
        $input_post += ['user_id' => $request->user()->id];
        $post->fill($input_post)->save();
        $post->tags()->syncWithoutDetaching($input_tags);
        return redirect('/posts/' . $post->id);
    }
    
    public function ranking()
    {
        $rank_tags = Tag::withCount('posts')
        ->orderBy('posts_count', 'desc')
        ->get();
        
        $like = Post::withCount('likes')
        ->orderBy('likes_count', 'desc')
        ->get();
        
        //いいね機能実装後、いいね取得数でランキング化
        return view('posts.ranking')->with([
            'rank_tags' => $rank_tags,
            'likes' => $like,
        ]);
    }
    
}
