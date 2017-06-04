<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\Http\Controllers\Auth;

class CommentsController extends Controller
{
    public function store(Post $post, $userId)
    {
        $post -> addComment(request('body'), $userId);
        return back();
    }

    public function like(Comment $comment)
    {
        $id = request()->comment_id;
        $comment = Comment::find($id);
        $comment->like += 1;
        $comment->save();

        return response()->json([
            "like_count" => $comment->like
        ]);
    }

    public function dislike(Comment $comment)
    {
        $id = request()->comment_id;
        $comment = Comment::find($id);
        $comment->dislike += 1;
        $comment->save();

        return response()->json([
            "dislike_count" => $comment->dislike
        ]);
    }

    public function comments()
    {
        return view('admin-lte.comments');
    }

    public function createComments()
    {
        return view('admin-lte.createComment');
    }
    public function saveComment()
    {
        //Check from intruders
        $comment = new Comment();
        /*        dd(request('title'));*/
        $comment->post_id = request('post_id');
        $comment->user_id = request('user_id');
        $comment->like = 0;
        $comment->dislike = 0;
        $comment->body = request('body');
        $comment->save();

        return redirect('/crud/comments');
    }
    public function editComment($id)
    {
        $comment = Comment::find($id);
        return view('admin-lte.editComment', ['comment' => $comment]);
    }

    public function updateComment($id)
    {
        $comment = Comment::find($id);
        $comment->post_id = request()->post_id;
        $comment->user_id = request()->user_id;
        $comment->like = request()->like;
        $comment->dislike = request()->dislike;
        $comment->body = request()->body;
        $comment->save();
        return redirect('/crud/comments');
    }

    public function destroyComment($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return back();
    }
}
