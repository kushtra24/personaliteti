<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    public function getImageAttribute($value)
    {
        return asset("storage/$value");
    }

    public function comments(){
    	return $this->hasMany(Comment::class);
    }

    public function user(){
        // a comment belongs to a user use this syntax $post->user->id
        return $this->belongsTo(User::class);
    }

    public static function archives(){
        return static::selectRaw('year(created_at) as year, monthname(created_at) as month, count(*) published')
        ->groupBy('year', 'month')
        ->get()
        ->toArray();
    }

}
