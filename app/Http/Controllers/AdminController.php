<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Test;
use DB;
use App\Answer;
use App\Question;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $registerdUsers = user::count();

        $writtenPosts = DB::table('posts')->count();

        $comments = DB::table('comments')->count();

        $countResults = Test::select(DB::raw('count(*) as Numri, finaltype'))
                            ->where('finaltype', '<>', 1)
                            ->groupBy('finaltype')
                            ->get();

        $getTestee = request('testee');
        
        $answers = Answer::with('question')->where('testee', '=', $getTestee)->get();
    
        $questions = Question::withCount([
            'answers as answer_minus_3' => function($query){
            $query->where('value', -3);
        },
            'answers as answer_minus_2' => function($query){
            $query->where('value', -2);
        },
            'answers as answer_minus_1' => function($query){
            $query->where('value', -1);
        },
            'answers as answer_0' => function($query){
            $query->where('value', 0);
        },
            'answers as answer_1' => function($query){
            $query->where('value', 1);
        },
            'answers as answer_2' => function($query){
            $query->where('value', 2);
        },
            'answers as answer_3' => function($query){
            $query->where('value', 3);
        }
        ])->get();

        return view('admin.index', compact('registerdUsers', 'writtenPosts', 'comments', 'countResults', 'questions', 'answers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
