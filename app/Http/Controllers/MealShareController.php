<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Review;
use App\Models\Like;
use Cloudinary;
use Illuminate\Support\Facades\Auth;

class MealShareController extends Controller
{
    public function index(Post $post, Review $review, Request $request)
    {
        $post = $post->withCount('likes','reviews')->orderBy('updated_at', 'DESC');
        $keyword = $request->input('keyword');
        if(!empty($keyword)) {
            $post = $post->where('meal_name', 'LIKE', "%{$keyword}%");
        }
        return view('posts.index')->with([
            'posts' => $post->get(),
            'keyword' => $keyword
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
        $post = Post::where('user_id','=',Auth::id())->withCount('likes', 'reviews')->orderBy('updated_at', 'DESC')->get();
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
    
    public function store(StorePostRequest $request, Post $post, Tag $tag)
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
    
    public function show(Post $post, Review $review)
    {
        $reviews = Review::where('post_id','=',$post->id)->paginate(9);
        $post_likes_count = $post->likes()->count();
        $review_num = $reviews->count();
        return view('posts.show',compact('post','reviews','post_likes_count','review_num'));
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
        //タグランキング
        $rank_tags = Tag::withCount('posts')
        ->orderBy('posts_count', 'desc')
        ->paginate(5);
        
        //いいねランキング
        $like = Post::withCount('likes')
        ->orderBy('likes_count', 'desc')
        ->paginate(5);
        
        return view('posts.ranking')->with([
            'rank_tags' => $rank_tags,
            'likes' => $like,
        ]);
    }
    

    public function like(Request $request, Like $like)
    {
        $user_id = Auth::user()->id;
        $post_id = $request->post_id;
        
        $already_liked = Like::where('user_id', $user_id)->where('post_id', $post_id)->first();
        
        if (!$already_liked) {
            $like->post_id = $post_id;
            $like->user_id = $user_id;
            $like->save();
        } else {
            Like::where('post_id', $post_id)->where('user_id', $user_id)->delete();
        }
        
        $post_likes_count = Post::withCount('likes')->findOrFail($post_id)->likes_count;
        $param = [
            'post_likes_count' => $post_likes_count,
        ];
        return response()->json($param);
    }
    
}
