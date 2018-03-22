<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(10);
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Post;

                 //image
        if($request->hasFile('file')){
            $filename = $request->file->getClientOriginalName();
            $filename = $request->file('file')->storeAs('/images', $filename);
            $store->image = $filename;
        }

        $store->title = $request['title'];
        $store->content = $request['content'];
        $store->author = $request['author'];
        
        $store->save();

        if ($store->save()) {
        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', 'Faqja eshte publikuar me sukses');
        } else {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Dicka nuk shkoje mirë!');
        }

        return redirect('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postet = Post::find($id);

        return view('post.show', compact('postet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id);

        return view('post.edit', compact('posts'));
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
        
        $store = Post::find($id);
        
        //image
        if($request->hasFile('file')){
            $filename = $request->file->getClientOriginalName();
            $filename = $request->file('file')->storeAs('/images', $filename);
            $store->image = $filename;
        }

        $store->title = $request['title'];
        $store->content = $request['content'];
        $store->author = $request['author'];

        $store->save();

        if ($store->save()) {
        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', 'Faqja eshte publikuar me sukses');
        } else {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Dicka nuk shkoje mirë!');
        }

        return redirect('post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Posts = Post::find($id);

        $Posts->delete();

        return back();
    }
}
