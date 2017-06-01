<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    public function addComment($body, $user_id)
    {
/*        dd($this);*/

        Comment::forceCreate([
            'body' =>$body,
            'post_id' => $this->id,
            'user_id' => $user_id
        ]);
    }

    public function user()//$post->comment->user
    {
        return $this->belongsTo(User::class);
    }


}
