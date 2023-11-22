<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Review;
use Cloudinary;

class MealShareController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->get()]);
    }
    
    public function create()
    {
        return view('posts.create');
    }
    
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $meal_image_url = Cloudinary::upload($request->file('meal_image_url')->getRealPath())->getSecurePath();
        $input += ['meal_image_url' => $meal_image_url];
        $post->fill($input)->save();
        return redirect('/');
    }
    
    public function show(Post $post, Review $review)
    {
        $reviews=Review::where('posts_id','=',$post->id)->get();
        return view('posts.show',compact('post','reviews'));
    }
    
    public function review_create(Request $request, Review $review)
    {
        $input = $request['review'];
        //データの取得は成功($input)
        $review->fill($input)->save();
        return redirect('/posts/' . $review->posts_id);
    }
}
