<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'category_id', 'user_id', 'intro', 'body'];
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
    
    public function likes()
    {
        return $this->belongsToMany('App\User', 'likes');
    }

}
