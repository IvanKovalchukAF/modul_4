<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;


class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('layouts.main', compact('posts'));
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('layouts.post', compact('post'));
    }
}
