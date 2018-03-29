<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

	public static function slug(){
	   return static::where('slug', $slug)->first();
	            return view('pages.page')
	            ->with('content', $page->content)
	            ->with('title', $page->title);
	}

}
