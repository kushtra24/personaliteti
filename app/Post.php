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

}
