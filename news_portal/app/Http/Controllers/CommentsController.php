<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\Http\Controllers\Auth;

class CommentsController extends Controller
{
    public function store(Post $post, $userId)
    {
/*        dd(request('body'));*/
        $post -> addComment(request('body'), $userId);

        return back();
    }
}
