<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use app\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Blog",
            "post" => \App\Models\Post::all()
        ]);
    }

    public function show(\App\Models\Post $post){
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
