<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Http\Requests\QuestionRequest;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view('questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request)
    {        

        $store = new Question;

        $store->question = $request['pyetja'];
        $store->purpose = $request['purpose'];
        $store->save();

        if ($store->save()) {
        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', 'Pyetja eshte publikuar me sukses');
        } else {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Dicka nuk shkoje mirë!');
        }

        return redirect('pyetjet');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $questions = Question::find($id);

        return view('questions.show', compact('questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $questions = Question::find($id);

        return view('questions.edit', compact('questions'));
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
        $questions = Question::find($id);

        $questions->question = $request['pyetja'];
        $questions->purpose = $request['purpose'];
        $questions->save();

        if ($questions->save()) {
        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', 'Pyetja eshte publikuar me sukses');
        } else {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Dicka nuk shkoje mirë!');
        }

        return redirect('pyetjet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $questions = Question::find($id);

        $questions->delete();

        return back();
    }
}
