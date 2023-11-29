<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Review;
use Cloudinary;

class MealShareController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->get()]);
    }
    
    public function create(Tag $tag, Category $category)
    {
        return view('posts.create')->with([
            'tags' => $tag->get(),
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
        $post->tags()->attach($input_tags);
        return redirect('/');
    }
    
    public function show(Post $post, Review $review)
    {
        $reviews=Review::where('post_id','=',$post->id)->get();
        return view('posts.show',compact('post','reviews'));
    }
    
    public function review_create(Request $request, Review $review)
    {
        $input = $request['review'];
        $review->fill($input)->save();
        return redirect('/posts/' . $review->posts_id);
    }
}
