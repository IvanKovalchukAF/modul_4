<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Image;
use App\User;
use App\Events\PostHasViewed;


class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('layouts.main', compact('posts'));
    }

    public function getImagesByPostId($id)
    {
        return Image::where('post_id', $id)->get();
    }

    /*show Post*/
    public function show($id)
    {
        $users = User::all();
/*        dd(compact('users'));*/
        $images = $this->getImagesByPostId($id);
        $post = Post::find($id);
        event(new PostHasViewed($post));

        return view('layouts.post', compact('post'), compact('images'), compact('users'));
    }


}
