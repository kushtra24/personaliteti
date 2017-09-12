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
            $spajtohem = "S'pajtohem";
            $pajtohem = "Pajtohem";

        return view('testi.create', compact('spajtohem', 'pajtohem'));
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
    $q4 = Input::get('q4');
    $q5 = Input::get('q5');
    $q6 = Input::get('q6');
    $q7 = Input::get('q7');
    $q8 = Input::get('q8');
    $q9 = Input::get('q9');
    $q10 = Input::get('q10');
    $q11 = Input::get('q11');

    //add the inpute values
    $result = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 + $q11;

    //Determine of the results are introvertet or extrovertet
    if ($result < 0) {
        $introExtro = "Extrovert";
    }
    elseif ($result === 0) {
    	$result = 1;
    	$introExtro = "Extrovert";
    }
    else{
        $introExtro = "Introvert";
    }

    // get the procentage of 30 as maximum result
    $procent = 3.0303 * $result;

    // Round up the double-number to the nearest integer
    $procentRez = round($procent, 0, PHP_ROUND_HALF_UP);


    //convert a negative number into a positive number
    $finalProcentRez = abs($procentRez);

    if ($finalProcentRez < 50) {
        $finalProcentRez += 50;
    }

    $endresult = $finalProcentRez . "% " . $introExtro;


    // Determine if the user is an intuitive person or an sensorik
    $nsq1 = Input::get('nsq1');
    $nsq2 = Input::get('nsq2');
    $nsq3 = Input::get('nsq3');
    $nsq4 = Input::get('nsq4');
    $nsq5 = Input::get('nsq5');
    $nsq6 = Input::get('nsq6');
    $nsq7 = Input::get('nsq7');
    $nsq8 = Input::get('nsq8');
    $nsq9 = Input::get('nsq9');
    $nsq10 = Input::get('nsq10');
    $nsq11 = Input::get('nsq11');

    //add the inpute values
    $nsresult = $nsq1 + $nsq2 + $nsq3 + $nsq4 + $nsq5 + $nsq6 + $nsq7 + $nsq8 + $nsq9 + $nsq10 + $nsq11;

      //Determine of the results are introvertet or extrovertet
    if ($nsresult < 0) {
        $intuSens = "Intuitive";
    }
    elseif ($nsresult === 0) {
        $nsresult = 1;
        $intuSens = "Shqisor";
    }
    else{
        $intuSens = "Shqisor";
    }

    $nsprocent = 3.0303 * $nsresult;

    // Round up the double-number to the nearest integer
    $nsprocentRez = round($nsprocent, 0, PHP_ROUND_HALF_UP);

    //convert a negative number into a positive number
    $nsfinalProcentRez = abs($nsprocentRez);


     if ($nsfinalProcentRez < 50) {
        $nsfinalProcentRez += 50;
    }

    $nsendresult = $nsfinalProcentRez . "% " . $intuSens;

    if ($intuSens == "Intuitive" && $introExtro == "Extrovert"){
        $finalType = "ENXX";
    }elseif($intuSens == "Intuitive" && $introExtro == "Introvert"){
            $finalType = "INXX";
    }elseif($intuSens == "Shqisor" && $introExtro == "Extrovert"){
            $finalType = "ESXX";
    }elseif($intuSens == "Shqisor" && $introExtro == "Introvert"){
        $finalType = "ISXX";
    }

    return view('testi.result', compact('endresult', 'introExtro', 'finalProcentRez', "nsendresult", "intuSens", "nsfinalProcentRez", "finalType"));
    }

}//end of class

