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
use MediaUploader;
use DB;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate('5');

        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        $posts = DB::table('media')->get();

        return view('post.create', compact('categories', 'posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $store = new Post;

        $store->user_id = auth()->id();
        $store->title = $request['title'];
        $store->content = $request['content'];
        
        $store->save();

        //image
        if($request->hasFile('file')){
            $media = MediaUploader::fromSource($request->file('file'))
                // place the file in a directory relative to the disk root
                ->toDirectory('images')
                ->upload();
            $store->attachMedia($media, 'thumbnail');
        }
        else{
            $store->attachMedia($request['fotoID'], 'thumbnail');
        }

        $store->Category()->attach($request->input('category'));

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

        // $slug = makeSlugFromTitle($postet->title);
        
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

        $postCategories = $posts->Category->pluck('id')->toArray();

        $categories = Category::all();

        $medias = DB::table('media')->get();

        return view('post.edit', compact('posts', 'categories', 'postCategories', 'medias'));
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
    
        $store->user_id = auth()->id();
        $store->title = $request['title'];
        $store->content = $request['content'];

        $store->Category()->sync($request->input('category'));

        $store->save();

        //image
        if($request->hasFile('file')){
            $media = MediaUploader::fromSource($request->file('file'))
                // place the file in a directory relative to the disk root
                ->toDirectory('images')
                ->upload();
            $store->syncMedia($media, 'thumbnail');
        }
        elseif($request['fotoID'] != '-1'){
            $store->syncMedia($request['fotoID'], 'thumbnail');
        }



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

        return redirect('post');
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
        
         $postCounter = Post::count('id');
        
         return view('post.archiveFilter', compact('posts', 'postCounter'));
    }
    

    public function blog(){

        $posts = Post::with("user", "media", "category")->orderBy('id','desc')->paginate(4);

        $archives = Post::archives();

        $categories = Category::all();

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

    /**
     * Create a conversation slug.
     *
     * @param  string $title
     * @return string
     */
    public function makeSlugFromTitle($title)
    {
        $slug = Str::slug($title);

        $count = Post::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }



}
