<?php

namespace App\Http\Controllers;

use App\testresults;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Cookie\CookieJar;
use Illuminate\Support\Facades\Cookie;
use App\User;
use Auth;
//use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

class testController extends Controller
{
    private $finalType;
    private $finalProcentRez;
    private $nsfinalProcentRez;
    private $ftfinalProcentRez;
    private $rolename;


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function doTheTest(){
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
    public function store()
    {

    }//end of store

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('home', compact('user'));
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

    public function introExtroQuestionsResult(){

        if(Cookie::get('finaltype')){

            $this->extrovertOrintrovert();

            $this->intuitiveOrSensing();

            $this->feelingOrThinking();

            $this->judgingOrperspecting();

            $this->finalTypeName($this->introExtro, $this->intuSens, $this->feelingThinking, $this->judgingPerspecting);

            $rolenames = $this->rolename;

            return view('testi.result')->with(['finalType' => $this->finalType, 'introExtro' => $this->introExtro, 'FirstfinalProcentRez' => $this->FirstfinalProcentRez, 'intuSens' => $this->intuSens, 'nsfinalProcentRez' => $this->nsfinalProcentRez, 'feelingThinking' => $this->feelingThinking, 'ftfinalProcentRez' => $this->ftfinalProcentRez, 'judgingPerspecting' => $this->judgingPerspecting, 'jpfinalProcentRez' => $this->jpfinalProcentRez, "rolenames" => $rolenames]);
        }
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function introExtroQuestions(CookieJar $cookieJar)
{

    $this->extrovertOrintrovert();

    $this->intuitiveOrSensing();

    $this->feelingOrThinking();

    $this->judgingOrperspecting();

    $this->finalTypeName($this->introExtro, $this->intuSens, $this->feelingThinking, $this->judgingPerspecting);

    $rolenames = $this->rolename;

    if($this->finalType){
        $cookieJar->queue(cookie('finaltype', $this->finalType, 45000));
        $cookieJar->queue(cookie('introExtro', $this->introExtro, 45000));
        $cookieJar->queue(cookie('FirstfinalProcentRez', $this->FirstfinalProcentRez, 45000));
        $cookieJar->queue(cookie('intuSens', $this->intuSens, 45000));
        $cookieJar->queue(cookie('nsfinalProcentRez', $this->nsfinalProcentRez, 45000));
        $cookieJar->queue(cookie('feelingThinking', $this->feelingThinking, 45000));
        $cookieJar->queue(cookie('ftfinalProcentRez', $this->ftfinalProcentRez, 45000));
        $cookieJar->queue(cookie('judgingPerspecting', $this->judgingPerspecting, 45000));
        $cookieJar->queue(cookie('jpfinalProcentRez', $this->jpfinalProcentRez, 45000));
        $cookieJar->queue(cookie('rolename', $rolenames, 45000));
    }


    if (Auth::check()) {
        $store = new TestResults;
        $store->user_id = Auth::user()->id;
        $store->finaltype = Cookie::get('finaltype', 'Coockies janë çkyqur');
        $store->intro_extro = Cookie::get('introExtro', 'Coockies janë çkyqur');
        $store->first_final_procent_rez = Cookie::get('FirstfinalProcentRez', 'Coockies janë çkyqur');
        $store->intu_sens = Cookie::get('intuSens', 'Coockies janë çkyqur');
        $store->ns_final_procent_rez = Cookie::get('nsfinalProcentRez', 'Coockies janë çkyqur');
        $store->feeling_thinking = Cookie::get('feelingThinking', 'Coockies janë çkyqur');
        $store->ft_final_procent_rez = Cookie::get('ftfinalProcentRez', 'Coockies janë çkyqur');
        $store->judging_perspecting = Cookie::get('judgingPerspecting', 'Coockies janë çkyqur');
        $store->jp_final_procent_rez = Cookie::get('jpfinalProcentRez', 'Coockies janë çkyqur');
        $store->save();
    }

    //DB::table('users')->whereId(Auth::user()->id)->increment('position');

    return view('testi.result')->with(['finalType' => $this->finalType, 'introExtro' => $this->introExtro, 'FirstfinalProcentRez' => $this->FirstfinalProcentRez, 'intuSens' => $this->intuSens, 'nsfinalProcentRez' => $this->nsfinalProcentRez, 'feelingThinking' => $this->feelingThinking, 'ftfinalProcentRez' => $this->ftfinalProcentRez, 'judgingPerspecting' => $this->judgingPerspecting, 'jpfinalProcentRez' => $this->jpfinalProcentRez, "rolenames" => $rolenames]);

} //end of function



//Evaluates the section of extrovert or introvert, working with the partial introExtro.blade.php testi > partials
public function extrovertOrintrovert(){

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
        $this->introExtro = "Extrovert";
    }
    elseif ($result === 0) {
        $result = 1;
        $this->introExtro = "Extrovert";
    }
    else{
        $this->introExtro = "Introvert";
    }

    $this->evaluate($result);

    $this->FirstfinalProcentRez = $this->finalProcentRez;

//    $this->endresult = $this->finalProcentRez . "% " . $this->introExtro;

}


//Evaluates the section of intuitive or Sensing, working with the partial intuitiveSensing.blade.php testi > partials
public function intuitiveOrSensing(){

    $ns1 = Input::get('ns1');
    $ns2 = Input::get('ns2');
    $ns3 = Input::get('ns3');
    $ns4 = Input::get('ns4');
    $ns5 = Input::get('ns5');
    $ns6 = Input::get('ns6');
    $ns7 = Input::get('ns7');
    $ns8 = Input::get('ns8');
    $ns9 = Input::get('ns9');
    $ns10 = Input::get('ns10');
    $ns11 = Input::get('ns11');
    //add the inpute values

    $result = $ns1 + $ns2 + $ns3 + $ns4 + $ns5 + $ns6 + $ns7 + $ns8 + $ns9 + $ns10 + $ns11;

    //Determine of the results are introvertet or extrovertet
    if ($result < 0) {
        $this->intuSens = "Intuitive";
    }
    elseif ($result === 0) {
        $result = 1;
        $this->intuSens = "Shqisor";
    }
    else{
        $this->intuSens = "Shqisor";
    }

    $this->evaluate($result);

    $this->nsfinalProcentRez = $this->finalProcentRez;

//    $this->nsendresult = $this->finalProcentRez . "% " . $this->intuSens;
}

//Evaluates the section of Feeling or Thinking, working with the partial thinkingFeeling.blade.php testi > partials
    public function feelingOrThinking(){

        $ftq1 = Input::get('ftq1');
        $ftq2 = Input::get('ftq2');
        $ftq3 = Input::get('ftq3');
        $ftq4 = Input::get('ftq4');
        $ftq5 = Input::get('ftq5');
        $ftq6 = Input::get('ftq6');
        $ftq7 = Input::get('ftq7');
        $ftq8 = Input::get('ftq8');
        $ftq9 = Input::get('ftq9');
        $ftq10 = Input::get('ftq10');
        $ftq11 = Input::get('ftq11');

        //add the inpute values
        $result = $ftq1 + $ftq2 + $ftq3 + $ftq4 + $ftq5 + $ftq6 + $ftq7 + $ftq8 + $ftq9 + $ftq10 + $ftq11;

        //Determine of the results are introvertet or extrovertet
        if ($result < 0) {
            $this->feelingThinking = "Mendim (Thinking)";
        }
        elseif ($result === 0) {
            $result = 1;
            $this->feelingThinking = "Ndjenjë (Feeling)";
        }
        else{
            $this->feelingThinking = "Ndjenjë (Feeling)";
        }

        $this->evaluate($result);

        $this->ftfinalProcentRez = $this->finalProcentRez;

//        $this->ftendresult = $this->finalProcentRez . "% " . $this->feelingThinking;
    }

//Evaluates the section of Judging or Perspekting, working with the partial judgingPerspecting.blade.php testi > partials
    public function judgingOrperspecting(){

        $jp1 = Input::get('jp1');
        $jp2 = Input::get('jp2');
        $jp3 = Input::get('jp3');
        $jp4 = Input::get('jp4');
        $jp5 = Input::get('jp5');
        $jp6 = Input::get('jp6');
        $jp7 = Input::get('jp7');
        $jp8 = Input::get('jp8');
        $jp9 = Input::get('jp9');
        $jp10 = Input::get('jp10');
        $jp11 = Input::get('jp11');

        //add the inpute values
        $result = $jp1 + $jp2 + $jp3 + $jp4 + $jp5 + $jp6 + $jp7 + $jp8 + $jp9 + $jp10 + $jp11;

        //Determine of the results are introvertet or extrovertet
        if ($result < 0) {
            $this->judgingPerspecting = "Gjykues (Judging)";
        }
        elseif ($result === 0) {
            $result = 1;
            $this->judgingPerspecting = "Perspektivë";
        }
        else{
            $this->judgingPerspecting = "Perspektivë";
        }

        $this->evaluate($result);

        $this->jpfinalProcentRez = $this->finalProcentRez;

//        $this->jpendresult = $this->finalProcentRez . "% " . $this->judgingPerspecting;
    }

// Does the logic of the algorithem on how to take on the results and what to do with them [here is where the magic happens]
public function evaluate($result){
    // get the procentage of 30 as maximum result
    $procent = 3.0303 * $result;

    // Round up the double-number to the nearest integer
    $procentRez = round($procent, 0, PHP_ROUND_HALF_UP);

    //convert a negative number into a positive number
    $this->finalProcentRez = abs($procentRez);

    if ($this->finalProcentRez < 50) {
        $this->finalProcentRez += 50;
    }
}

// putting out the final 4 letters of the personality type.
public function finalTypeName($introExtro, $intuSens,  $feelingThinking, $judgingPerspecting){
    if ($introExtro == "Introvert" && $intuSens == "Intuitive" && $feelingThinking == "Mendim (Thinking)" && $judgingPerspecting == "Gjykues (Judging)"){
        $this->finalType = "INTJ";
    }
    elseif ($introExtro == "Introvert" && $intuSens == "Intuitive" && $feelingThinking == "Mendim (Thinking)" && $judgingPerspecting == "Perspektivë"){
        $this->finalType = "INTP";
    }
    elseif ($introExtro == "Extrovert" && $intuSens == "Intuitive" && $feelingThinking == "Mendim (Thinking)" && $judgingPerspecting == "Gjykues (Judging)"){
        $this->finalType = "ENTJ";
    }
    elseif ($introExtro == "Extrovert" && $intuSens == "Intuitive" && $feelingThinking == "Mendim (Thinking)" && $judgingPerspecting == "Perspektivë"){
        $this->finalType = "ENTP";
    }
    elseif ($introExtro == "Introvert" && $intuSens == "Intuitive" && $feelingThinking == "Ndjenjë (Feeling)" && $judgingPerspecting == "Gjykues (Judging)"){
        $this->finalType = "INFJ";
    }
    elseif ($introExtro == "Introvert" && $intuSens == "Intuitive" && $feelingThinking == "Ndjenjë (Feeling)" && $judgingPerspecting == "Perspektivë"){
        $this->finalType = "INFP";
    }
    elseif ($introExtro == "Extrovert" && $intuSens == "Intuitive" && $feelingThinking == "Ndjenjë (Feeling)" && $judgingPerspecting == "Gjykues (Judging)"){
        $this->finalType = "ENFJ";
    }
    elseif ($introExtro == "Extrovert" && $intuSens == "Intuitive" && $feelingThinking == "Ndjenjë (Feeling)" && $judgingPerspecting == "Perspektivë"){
        $this->finalType = "ENFP";
    }
    elseif ($introExtro == "Introvert" && $intuSens == "Shqisor" && $feelingThinking == "Ndjenjë (Feeling)" && $judgingPerspecting == "Gjykues (Judging)"){
        $this->finalType = "ISFJ";
    }
    elseif ($introExtro == "Introvert" && $intuSens == "Shqisor" && $feelingThinking == "Mendim (Thinking)" && $judgingPerspecting == "Gjykues (Judging)"){
        $this->finalType = "ISTJ";
    }
    elseif ($introExtro == "Extrovert" && $intuSens == "Shqisor" && $feelingThinking == "Ndjenjë (Feeling)" && $judgingPerspecting == "Gjykues (Judging)"){
        $this->finalType = "ESTJ";
    }
    elseif ($introExtro == "Extrovert" && $intuSens == "Shqisor" && $feelingThinking == "Ndjenjë (Feeling)" && $judgingPerspecting == "Gjykues (Judging)"){
        $this->finalType = "ESFJ";
    }
    elseif ($introExtro == "Introvert" && $intuSens == "Shqisor" && $feelingThinking == "Mendim (Thinking)" && $judgingPerspecting == "Perspektivë"){
        $this->finalType = "ISTP";
    }
    elseif ($introExtro == "Introvert" && $intuSens == "Shqisor" && $feelingThinking == "Ndjenjë (Feeling)" && $judgingPerspecting == "Perspektivë"){
        $this->finalType = "ISFP";

    }
    elseif ($introExtro == "Extrovert" && $intuSens == "Shqisor" && $feelingThinking == "Mendim (Thinking)" && $judgingPerspecting == "Perspektivë"){
        $this->finalType = "ESTP";
    }
    elseif ($introExtro == "Extrovert" && $intuSens == "Shqisor" && $feelingThinking == "Ndjenjë (Feeling)" && $judgingPerspecting == "Perspektivë"){
        $this->finalType = "ESFP";
    }
    else {
        $this->finalType = "Pa definim";
    }

}

public function cantAccess(){
    return "Më vjen keq nuk mund të kyqeni në këtë faqe në atë mënyrë";
}


}//end of class

