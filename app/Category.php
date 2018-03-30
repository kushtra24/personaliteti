<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     public function post(){
    	// this is a many to many stable it links many categories to many posts
    	return $this->belongsToMany(Post::class, 'category_post');
    }

	/**
	* Get the route key for the model.
	*
	* @return string
	*/
	public function getRouteKeyName()
	{
	    return 'slug';
	}
}
