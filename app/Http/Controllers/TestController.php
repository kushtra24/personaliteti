<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Cookie\CookieJar;
use Illuminate\Support\Facades\Cookie;
use App\User;
use App\Answer;
use App\Question;
use App\TestCounter;
use Illuminate\Support\Facades\DB;
use Auth;
//use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

class TestController extends Controller
{
    public $finalType;
    private $finalProcentRez;
    private $nsfinalProcentRez;
    private $ftfinalProcentRez;
    private $rol_name;
    private $introExtro;
    private $intuSens;
    private $feelingThinking;
    private $judgingPerspecting;
    private $FirstfinalProcentRez;
    private $jpfinalProcentRez;


    public function doTheTest(){

        $questions = Question::take(44)->inRandomOrder()->get();

        return view('testi.create', compact('questions'));
    }

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
    public function edit()
    {
        return view('testi.edit');
    }

    // public function getResults(){
    //         return redirect('/result');
    // }

    /**
     * Returns the variables and the results to the view
     *
     * @return \Illuminate\Http\Response
     */
    public function introExtroQuestionsResult(){
        // if(){
            //to get the short description
            // $tipi = \App\Tipi::where('type', $this->finalType)->first();

            $results = DB::table('tests')->latest()->first();

            // dd($results);

            return view('testi.result', compact('results'));

                // return redirect('result');
            // return view('testi.result')->with([
            //     'finalType' => $this->finalType,
            //     'introExtro' => $this->introExtro,
            //     'FirstfinalProcentRez' => $this->FirstfinalProcentRez,
            //     'intuSens' => $this->intuSens,
            //     'nsfinalProcentRez' => $this->nsfinalProcentRez,
            //     'feelingThinking' => $this->feelingThinking,
            //     'ftfinalProcentRez' => $this->ftfinalProcentRez,
            //     'judgingPerspecting' => $this->judgingPerspecting,
            //     'jpfinalProcentRez' => $this->jpfinalProcentRez,
            //     'rol_name' => $this->rol_name,
            //     'tipi' => $tipi
            // ]);
        // }
        // else{
        //     return redirect('vlersimi');
        // }
    }

public function introExtroQuestions(CookieJar $cookieJar)
{
    // increment the test Counter by one
    DB::table('test_counters')->increment('test_counter');


    // store the final results of the question
    $introExtroResult = 0;
    $intuitionSensingResult = 0;
    $feelingThinkingResult = 0;
    $jundgingPercivingResult = 0;

    // get all questions and evaluate the perpose   
    foreach(request()->input('q') as $qid => $value){
        $question = Question::find($qid);
        if ($question->purpose == 'IntroExtro') {
            $introExtroResult += $value;
        }        
        elseif($question->purpose == 'intuitionSensing'){
            $intuitionSensingResult += $value;
        }   
        elseif($question->purpose == 'feelingThinking'){
            $feelingThinkingResult += $value;
        } 
        elseif($question->purpose == 'jundgingPerciving'){
            $jundgingPercivingResult += $value;
        }

        // call_user_func($question->purpose);
    }


    $this->extrovertOrintrovert($introExtroResult);

    $this->intuitiveOrSensing($intuitionSensingResult);

    $this->feelingOrThinking($feelingThinkingResult);

    $this->judgingOrperspecting($jundgingPercivingResult);

    $this->finalTypeName($this->introExtro, $this->intuSens, $this->feelingThinking, $this->judgingPerspecting);

    // Save the answers to the answeres table on the database
    foreach (request()->input('q') as $qid => $value) {
        $answer = new Answer();    
        $answer->question_id = $qid;
        $answer->value = $value;
        $answer->testee = TestCounter::first()->test_counter;;
        $answer->save();
    }

    
        $store = new Test();

        if (Auth::check()) {
            $store->user_id = Auth::user()->id;
        }
        $store->finaltype = $this->finalType;
        $store->intro_extro = $this->introExtro;
        $store->first_final_procent_rez = $this->FirstfinalProcentRez;
        $store->intu_sens = $this->intuSens;
        $store->ns_final_procent_rez = $this->nsfinalProcentRez;
        $store->feeling_thinking = $this->feelingThinking;
        $store->ft_final_procent_rez = $this->ftfinalProcentRez;
        $store->judging_perspecting = $this->judgingPerspecting;
        $store->jp_final_procent_rez = $this->jpfinalProcentRez;
        $store->rol_name = $this->rol_name;
        $store->save();

    // if (!Auth::check()){
        Cookie::queue(Cookie::make('finaltype', $this->finalType, 3000));
        Cookie::queue(Cookie::make('introExtro', $this->introExtro, 3000));
        Cookie::queue(Cookie::make('FirstfinalProcentRez', $this->FirstfinalProcentRez, 3000));
        Cookie::queue(Cookie::make('intuSens', $this->intuSens, 3000));
        Cookie::queue(Cookie::make('nsfinalProcentRez', $this->nsfinalProcentRez, 3000));
        Cookie::queue(Cookie::make('feelingThinking', $this->feelingThinking, 3000));
        Cookie::queue(Cookie::make('ftfinalProcentRez', $this->ftfinalProcentRez, 3000));
        Cookie::queue(Cookie::make('judgingPerspecting', $this->judgingPerspecting, 3000));
        Cookie::queue(Cookie::make('jpfinalProcentRez', $this->jpfinalProcentRez, 3000));
        Cookie::queue(Cookie::make('rol_name', $this->rol_name, 3000));
    // }

    

    // return $this->introExtroQuestionsResult();
    return redirect('result');


} //end of function



//Evaluates the section of extrovert or introvert, working with the partial introExtro.blade.php testi > partials
public function extrovertOrintrovert($result)
{

    //Determine of the results are introvertet or extrovertet
    if ($result < 0) {
        $this->introExtro = "Extrovert";

    }
    elseif ($result === 0) {
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
public function intuitiveOrSensing($result){
    
    //Determine of the results are introvertet or extrovertet
    if ($result < 0) {
        $this->intuSens = "Shqisor";
    }
    elseif ($result === 0) {
        $this->intuSens = "Shqisor";
    }
    else{
        $this->intuSens = "Intuitive";
    }

    $this->evaluate($result);

    $this->nsfinalProcentRez = $this->finalProcentRez;

    return  $this->nsfinalProcentRez;
//    $this->nsendresult = $this->finalProcentRez . "% " . $this->intuSens;
}

//Evaluates the section of Feeling or Thinking, working with the partial thinkingFeeling.blade.php testi > partials
    public function feelingOrThinking($result){

        //Determine of the results are introvertet or extrovertet
        if ($result < 0) {
            $this->feelingThinking = "Mendim (Thinking)";
        }
        elseif ($result === 0) {
            $this->feelingThinking = "Ndjenjë (Feeling)";
        }
        else{
            $this->feelingThinking = "Ndjenjë (Feeling)";
        }

        $this->evaluate($result);

        $this->ftfinalProcentRez = $this->finalProcentRez;

        return $this->ftfinalProcentRez;
//        $this->ftendresult = $this->finalProcentRez . "% " . $this->feelingThinking;
    }

//Evaluates the section of Judging or Perspekting, working with the partial judgingPerspecting.blade.php testi > partials
    public function judgingOrperspecting($result){

        //Determine of the results are introvertet or extrovertet
        if ($result < 0) {
            $this->judgingPerspecting = "Perspektivë";
        }
        elseif ($result === 0) {
            $this->judgingPerspecting = "Perspektivë";
        }
        else{
            $this->judgingPerspecting = "Gjykues (Judging)";
        }

        $this->evaluate($result);

        $this->jpfinalProcentRez = $this->finalProcentRez;

        return $this->jpfinalProcentRez;
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
        $this->rol_name = "Arkitekti";
    }
    elseif ($introExtro == "Introvert" && $intuSens == "Intuitive" && $feelingThinking == "Mendim (Thinking)" && $judgingPerspecting == "Perspektivë"){
        $this->finalType = "INTP";
        $this->rol_name ="Racionali";
    }
    elseif ($introExtro == "Extrovert" && $intuSens == "Intuitive" && $feelingThinking == "Mendim (Thinking)" && $judgingPerspecting == "Gjykues (Judging)"){
        $this->finalType = "ENTJ";
        $this->rol_name ="Komanderi";
    }
    elseif ($introExtro == "Extrovert" && $intuSens == "Intuitive" && $feelingThinking == "Mendim (Thinking)" && $judgingPerspecting == "Perspektivë"){
        $this->finalType = "ENTP";
        $this->rol_name ="Debatisti";
    }
    elseif ($introExtro == "Introvert" && $intuSens == "Intuitive" && $feelingThinking == "Ndjenjë (Feeling)" && $judgingPerspecting == "Gjykues (Judging)"){
        $this->finalType = "INFJ";
        $this->rol_name ="Diplomati";
    }
    elseif ($introExtro == "Introvert" && $intuSens == "Intuitive" && $feelingThinking == "Ndjenjë (Feeling)" && $judgingPerspecting == "Perspektivë"){
        $this->finalType = "INFP";
        $this->rol_name ="Mediatori";
    }
    elseif ($introExtro == "Extrovert" && $intuSens == "Intuitive" && $feelingThinking == "Ndjenjë (Feeling)" && $judgingPerspecting == "Gjykues (Judging)"){
        $this->finalType = "ENFJ";
        $this->rol_name ="Protagonisti";
    }
    elseif ($introExtro == "Extrovert" && $intuSens == "Intuitive" && $feelingThinking == "Ndjenjë (Feeling)" && $judgingPerspecting == "Perspektivë"){
        $this->finalType = "ENFP";
        $this->rol_name ="Mikpritesi";
    }
    elseif ($introExtro == "Introvert" && $intuSens == "Shqisor" && $feelingThinking == "Ndjenjë (Feeling)" && $judgingPerspecting == "Gjykues (Judging)"){
        $this->finalType = "ISFJ";
        $this->rol_name ="Logjistiku";
    }
    elseif ($introExtro == "Introvert" && $intuSens == "Shqisor" && $feelingThinking == "Mendim (Thinking)" && $judgingPerspecting == "Gjykues (Judging)"){
        $this->finalType = "ISTJ";
        $this->rol_name ="Mbrojtesi";
    }
    elseif ($introExtro == "Extrovert" && $intuSens == "Shqisor" && $feelingThinking == "Ndjenjë (Feeling)" && $judgingPerspecting == "Gjykues (Judging)"){
        $this->finalType = "ESTJ";
        $this->rol_name ="Ekzekutivi";
    }
    elseif ($introExtro == "Extrovert" && $intuSens == "Shqisor" && $feelingThinking == "Ndjenjë (Feeling)" && $judgingPerspecting == "Gjykues (Judging)"){
        $this->finalType = "ESFJ";
        $this->rol_name ="Konsulenti";
    }
    elseif ($introExtro == "Introvert" && $intuSens == "Shqisor" && $feelingThinking == "Mendim (Thinking)" && $judgingPerspecting == "Perspektivë"){
        $this->finalType = "ISTP";
        $this->rol_name ="Virtuozi";
    }
    elseif ($introExtro == "Introvert" && $intuSens == "Shqisor" && $feelingThinking == "Ndjenjë (Feeling)" && $judgingPerspecting == "Perspektivë"){
        $this->finalType = "ISFP";
        $this->rol_name ="Adventuristi";
    }
    elseif ($introExtro == "Extrovert" && $intuSens == "Shqisor" && $feelingThinking == "Mendim (Thinking)" && $judgingPerspecting == "Perspektivë"){
        $this->finalType = "ESTP";
        $this->rol_name ="Ndermarresi";
    }
    elseif ($introExtro == "Extrovert" && $intuSens == "Shqisor" && $feelingThinking == "Ndjenjë (Feeling)" && $judgingPerspecting == "Perspektivë"){
        $this->finalType = "ESFP";
        $this->rol_name ="Lozenjeri";
    }
    else {
        $this->finalType = "Pa definim - Nuk ju keni pergjigjur pyetjeve apo keni lene shum pyetje neotrale";
    }

}

public function cantAccess(){
    return "Më vjen keq nuk mund të kyqeni në këtë faqe në atë mënyrë";
}

}//end of class

