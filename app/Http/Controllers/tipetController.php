<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class tipetController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tipet');
    }
    

}
