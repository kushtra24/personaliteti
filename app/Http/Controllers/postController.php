<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Storage;
use Analytics;
use Spatie\Analytics\Period;
use App\Category;
use Carbon\Carbon;
use App\Http\Requests\PostRequest;

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
        $Categories = Category::all();
        return view('post.create', compact('Categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        // return $request->input('category');
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
        // $store->category = $request['category'];
        // $store->author = auth()->user()->first_name;
        
        $store->save();

        $store->category()->attach($request->input('category'));

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

        $categories = Category::all();

        Carbon::setLocale('sq');
        Carbon::setUtf8(true);


        return view('post.show', compact('postet', 'archives', 'categories'));
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

        $store->category()->sync($request->input('category'));
        
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
        // Post::where('id', $id)->delete();

        $post = Post::find($id);

        $post->category()->detach();

        $post->comments()->delete();

        $post->delete();

        return back();
    }

    public function archiveFilterd(){

        $posts = Post::latest();

        //get only the month and year of the post clicked on the archive
        if ($month = request('month')) {
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }
        if ($year = request('year')) {
            $posts->whereYear('created_at', $year);
        }

        $posts = $posts->get();
        
        return view('post.archiveFilter', compact('posts'));
    }
    

    public function blog(){
        $posts = Post::orderBy('id','desc')->paginate(4);

        $archives = Post::archives();

        $categories = Category::all();

        // $pages = Analytics::fetchVisitorsAndPageViews(Period::days(7));

        return view('post.blog', compact('posts', 'archives', 'categories'));
    }


    public function search(){

        // they are all the same.
        $q = request()->input('q');

        $query = Post::where('title','LIKE','%'.$q.'%')->orWhere('content','LIKE','%'.$q.'%')->get();
        

        if(count($query) > 0)
            return view('post.searchResult')->withDetails($query)->withQuery ( $q );
        else
            return view ('post.searchResult')->withMessage('No Details found. Try to search again !');
        
    }



}
