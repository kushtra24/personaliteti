<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{

    public function user(){
        return $this->belongTo(User::Class);
    }

}
