<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class Tipi extends Model
{
	use Mediable;
	
    /**
	* Get the route key for the model.
	*
	* @return string
	*/
	public function getRouteKeyName()
	{
	    return 'type';
	}

}
