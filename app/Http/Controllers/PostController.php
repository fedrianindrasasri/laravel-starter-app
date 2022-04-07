<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::get();
        // dd($posts);
        return view('welcome', ['posts' => $posts]);
    }

    public function detail(Post $post)
    {
        // route model binding

        return view('detail', ['post' => $post]);
    }
}
