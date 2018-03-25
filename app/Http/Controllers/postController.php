<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Storage;

use Carbon\Carbon;

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
            $filename = $request->file('file')->storeAs('/images', $filename, 'public');
            $store->image = $filename;
        }

        $store->user_id = auth()->id();
        $store->title = $request['title'];
        $store->content = $request['content'];
        $store->author = auth()->user()->first_name;
        
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
        
        $archives = Post::archives();

        Carbon::setLocale('sq');
        Carbon::setUtf8(true);


        return view('post.show', compact('postet', 'archives'));
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
            $filename = $request->file('file')->storeAs('/images', $filename, 'public');
            $store->image = $filename;
        }
        
        $store->user_id = auth()->id();
        $store->title = $request['title'];
        $store->content = $request['content'];
        $store->author = auth()->user()->first_name;

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

    public function archiveFilterd(){

         $posts = Post::latest();

        if ($month = request('month')) {
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = request('year')) {
            $posts->whereYear('created_at', $year);
        }

        $posts = $posts->get();

        $archives = Post::archives();

        return view('post.archiveFilter', compact('posts', 'archives'));
    }

    public function blog(){
        $posts = Post::orderBy('id','desc')->paginate(4);

        $archives = Post::archives();
        
        return view('post.blog', compact('posts', 'archives'));
    }

   

}
