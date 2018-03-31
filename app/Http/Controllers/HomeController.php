<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the personality types list
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = auth()->user()->testResults->last();
        return view('home')->with('results', $results );
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function tipet()
    {
        return view('tipet');
    }
    


}
