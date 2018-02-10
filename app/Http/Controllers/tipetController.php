<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipi;

class tipetController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipet = Tipi::all();

        return view('tipet.tipet', compact('tipet'));
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipi = Tipi::find($id);

        return view('tipet.tipi', compact('tipi'));
    }


}
