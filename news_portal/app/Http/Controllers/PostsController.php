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

    /*Start like method */

    public function isLikedByMe($id)
    {
        $post = Post::find($id)->first();
        if (Like::whereUserId(Auth::id())->wherePostId($post->id)->exists()){
            return 'true';
        }
        return 'false';
    }

    public function like(Post $post)
    {
        $existing_like = Like::withTrashed()->wherePostId($post->id)->whereUserId(Auth::id())->first();

        if (is_null($existing_like)) {
            Like::create([
                'post_id' => $post->id,
                'user_id' => Auth::id()
            ]);
        } else {
            if (is_null($existing_like->deleted_at)) {
                $existing_like->delete();
            } else {
                $existing_like->restore();
            }
        }
    }
    /*End like method */

}
