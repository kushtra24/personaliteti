<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\testCounter;

class counterController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counters = testCounter::all();

        return view('layouts.app', compact('counters'));
    }

}
