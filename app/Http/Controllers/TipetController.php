<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipi;
use App\Http\Requests\TypeRequest;
use Carbon\Carbon;
use MediaUploader;

class TipetController extends Controller
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
    public function show(Tipi $name)
    {
          $tipi = Tipi::find($name);

            Carbon::setLocale('sq');
            Carbon::setUtf8(true);

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
    public function update(TypeRequest $request, $id)
    {
        //Updating the fields to the database based on the id
        $tipi = Tipi::find($id);


        //image
        if($request->hasFile('featFile')){
            $media = MediaUploader::fromSource($request->file('featFile'))
                // place the file in a directory relative to the disk root
                ->toDirectory('images')
                ->upload();
            $tipi->syncMedia($media, 'thumbnail');
        }

         //image
         if($request->hasFile('file')){
            $media = MediaUploader::fromSource($request->file('file'))
                // place the file in a directory relative to the disk root
                ->toDirectory('images')
                ->upload();
            $tipi->syncMedia($media, 'tipiImg');
        }

        // if($request->hasFile('file')){
        //     $filename = $request->file->getClientOriginalName();
        //     $filename = $request->file('file')->storeAs('/images', $filename);
        //     $tipi->type_img = $filename;
        // }

        $tipi->type = $request['type'];
        $tipi->name = $request['name'];
        $tipi->shortDescription = $request['shortDescription'];
        $tipi->hyrje = $request['hyrje'];
        $tipi->forcatDobesit = $request['forcatDobesit'];
        $tipi->lidhjet = $request['lidhjet'];
        $tipi->miqesite = $request['miqesite'];
        $tipi->siPrinder = $request['siPrinder'];
        $tipi->profesioni = $request['profesioni'];
        $tipi->vendiPunes = $request['vendiPunes'];
        $tipi->shtese = $request['shtese'];

        $tipi->save();

         if ($tipi->save()) {
        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', 'Tipi eshte ndryshuar me sukses');
        } else {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Dicka nuk shkoje mirë!');
        }


        return redirect('admintipet');
    }
    


}
