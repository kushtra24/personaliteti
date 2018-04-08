<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestCounter;

class CounterController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counters = TestCounter::all();

        return view('layouts.app', compact('counters'));
    }

}
