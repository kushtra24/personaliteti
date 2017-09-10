<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;


class testController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mbti.test');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


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
    public function introExtroQuestions()
    {

    $q1 = Input::get('q1');
    $q2 = Input::get('q2');
    $q3 = Input::get('q3');

    //add the inpute values
    $result = $q1 + $q2 + $q3;

    //Determine of the results are introvertet or extrovertet
    if ($result <= 0) {
        $introExtro = "extrovert";
    }
    else{
        $introExtro = "introvert";
    }

    // get the procentage of 30 as maximum result
    $procent = 3.0303 * $result;

    // Round up the double-number to the nearest integer
    $procentRez = round($procent, 0, PHP_ROUND_HALF_UP);

    //convert a negative number into a positive number
    $finalProcentRez = abs($procentRez);

    $endresult = $finalProcentRez . "% " . $introExtro;
    

    return view('mbti.results', compact('endresult', 'introExtro', 'finalProcentRez' ));
    }

}//end of class
