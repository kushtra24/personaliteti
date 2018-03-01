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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showTypes()
    {
        $tipet = Tipi::all();

        return view('tipet.admintipet', compact('tipet'));
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

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipi = Tipi::find($id);

        return view('tipet.edit', compact('tipi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Updating the fields to the database based on the id
        $tipi = Tipi::find($id);

        //image
        if($request->hasFile('file')){
            $filename = $request->file->getClientOriginalName();
            $filename = $request->file('file')->storeAs('/images', $filename);
            $tipi->type_img = $filename;
        }

        $tipi->type = $request['type'];
        $tipi->name = $request['name'];
        $tipi->description = $request['description'];

        $tipi->save();

        return redirect('admintipet');
    }
    


}
