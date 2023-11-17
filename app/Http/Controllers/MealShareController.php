<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MealShareController extends Controller
{
    public function index()
    {
        return $post->get();
    }
}
