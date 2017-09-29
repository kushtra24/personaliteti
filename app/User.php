<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'age', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles(){
        return $this->belongsToMany('App\Role', 'user_role', 'user_id', 'role_id');
    }

    public function hasAnyRole($roles){
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        }
        else{
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }// end of hasAnyRole

    public function hasRole($role){
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
            return false;
    }//end of HasRole

    public function  testResults(){
        return $this->hasMany(TestResults::Class);
    }
//'App\testResults', 'user_id', 'id'


}// end of class
