<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Test;
use Illuminate\Cookie\CookieJar;
use Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Jobs\SendVerificationEmail;

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
            'age' => 'required|integer|max:99|min:8',
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
        $user->email_token = base64_encode($data['email']);
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
        $store->rol_name = Cookie::get('rol_name', 'Coockies janë çkyqur');
        $store->save();


        return $user;
    }

    /**
     * Handle a registration request for the application.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        dispatch(new SendVerificationEmail($user));
        return view('email.verification');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param $token
     * @return \Illuminate\Http\Response
     */
    public function verify($token)
    {
        $user = User::where('email_token', $token)->first();
        $user->verified = 1;
        if($user->save()){
            return view('email.emailconfirm',['user'=>$user]);
        }
    }

}
