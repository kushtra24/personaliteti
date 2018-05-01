<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MediaUploader;
use DB;
use Mediable;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $posts = DB::table('media')->get();

        return view('gallery.index', compact('posts'));
    }

       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $media = MediaUploader::fromSource($request->file('file'))
        // place the file in a directory relative to the disk root
        ->toDirectory('images')
        ->upload();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $media = Post::find($id);

        return view('gallery.index', compact('media') );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

        $post = Media::find($id);

        $post->delete();

        return back();
    }
}
