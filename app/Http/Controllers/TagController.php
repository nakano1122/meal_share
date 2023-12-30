<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index(Tag $tag, Request $request)
    {
        $keyword = $request->input('keyword');
        return view('tags.index')->with([
            'posts' => $tag->getByTag(),
            'keyword' => $keyword,
            ]);
    }
}
