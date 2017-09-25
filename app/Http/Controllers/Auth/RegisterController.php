<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\TestResults;
use Illuminate\Cookie\CookieJar;
use Auth;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'age' => 'required|integer',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = new User();
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->age = $data['age'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();
        $user->roles()->attach(Role::where('name', 'User')->first());

        // Store the values of the cookies into the database depending on the current user that is loged in
        $store = new TestResults;
        $store->user_id = $user->id;
        $store->finaltype = Cookie::get('finaltype', 'Coockies janë çkyqur');
        $store->intro_extro = Cookie::get('introExtro', 'Coockies janë çkyqur');
        $store->first_final_procent_rez = Cookie::get('FirstfinalProcentRez', 'Coockies janë çkyqur');
        $store->intu_sens = Cookie::get('intuSens', 'Coockies janë çkyqur');
        $store->ns_final_procent_rez = Cookie::get('nsfinalProcentRez', 'Coockies janë çkyqur');
        $store->feeling_thinking = Cookie::get('feelingThinking', 'Coockies janë çkyqur');
        $store->ft_final_procent_rez = Cookie::get('ftfinalProcentRez', 'Coockies janë çkyqur');
        $store->judging_perspecting = Cookie::get('judgingPerspecting', 'Coockies janë çkyqur');
        $store->jp_final_procent_rez = Cookie::get('jpfinalProcentRez', 'Coockies janë çkyqur');
        $store->save();

        return $user;
    }
}
