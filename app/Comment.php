<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post(){
    	// a comment belongs to a post use this syntax $comment->post->id
    	return $this->belongsTo(Post::class);
    }

    public function user(){
    	// a comment belongs to a user use this syntax $comment->user->id
    	return $this->belongsTo(User::class);
    }

}
