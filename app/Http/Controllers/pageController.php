<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Http\Requests\PostToPage;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostToPage $request)
    {
        $store = new Page;

        $store->title = $request['title'];
        $store->slug = $request['slug'];
        $store->content = $request['content'];
        $store->save();

        if ($store->save()) {
        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', 'Faqja eshte publikuar me sukses');
        } else {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Dicka nuk shkoje mirë!');
        }

        return redirect('faqet');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pages = Page::find($id);

        return view('pages.show', compact('pages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pages = Page::find($id);

        return view('pages.edit', compact('pages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostToPage $request, $id)
    {
        $pages = Page::find($id);

        $pages->title = $request['title'];
        $pages->slug = $request['slug'];
        $pages->content = $request['content'];
        $pages->save();

        if ($pages->save()) {
        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', 'Faqja eshte ndryshuar me sukses');
        } else {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Dicka nuk shkoje mirë!');
        }

        return redirect('faqet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pages = Page::find($id);

        $pages->delete();

        return back();
    }
}
