<?php

namespace App\Http\Controllers;

use App\testresults;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Cookie\CookieJar;
use Illuminate\Support\Facades\Cookie;
use App\User;
use App\Question;
use Auth;
//use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

class testController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function doTheTest(){

        $questions = Question::all();

        $spajtohem = "S'pajtohem";
        $pajtohem = "Pajtohem";

        return view('testi.create', compact('spajtohem', 'pajtohem', 'questions'));
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
    public function edit()
    {
        return view('testi.edit');
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

//        dd($this->introExtro);
        if(Cookie::get('finaltype')){
            return view('testi.result')->with(['finalType' => $this->finalType, 'introExtro' => $this->introExtro, 'FirstfinalProcentRez' => $this->FirstfinalProcentRez, 'intuSens' => $this->intuSens, 'nsfinalProcentRez' => $this->nsfinalProcentRez, 'feelingThinking' => $this->feelingThinking, 'ftfinalProcentRez' => $this->ftfinalProcentRez, 'judgingPerspecting' => $this->judgingPerspecting, 'jpfinalProcentRez' => $this->jpfinalProcentRez, 'rol_name' => $this->rol_name]);
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

    if (Auth::check()) {
        $store = new TestResults();
        $store->user_id = Auth::user()->id;
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
    }

    if (!Auth::check()){
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
    }

    //DB::table('users')->whereId(Auth::user()->id)->increment('position');
    return $this->introExtroQuestionsResult();

//    return view('testi.result')->with(['finalType' => $this->finalType, 'introExtro' => $this->introExtro, 'FirstfinalProcentRez' => $this->FirstfinalProcentRez, 'intuSens' => $this->intuSens, 'nsfinalProcentRez' => $this->nsfinalProcentRez, 'feelingThinking' => $this->feelingThinking, 'ftfinalProcentRez' => $this->ftfinalProcentRez, 'judgingPerspecting' => $this->judgingPerspecting, 'jpfinalProcentRez' => $this->jpfinalProcentRez, "rolenames" => $rolenames]);

} //end of function



//Evaluates the section of extrovert or introvert, working with the partial introExtro.blade.php testi > partials
public function extrovertOrintrovert()
{
    $result = 0;

    if($extroIntro = request()->input('q.extroIntro')){
        foreach($extroIntro as $question){
            $result = $result + $question;
        }
    }

    //Determine of the results are introvertet or extrovertet
    if ($result < 0) {
        $this->introExtro = "Extrovert";

    }
    elseif ($result === 0) {
        $this->introExtro = "Padefinim";
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

    $result = 0;
   
    if($intuitionSensing = request()->input('q.intuitionSensing')){
        foreach($intuitionSensing as $question){
            $result = $result + $question;
        }    
    }
    
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

    return  $this->nsfinalProcentRez;
//    $this->nsendresult = $this->finalProcentRez . "% " . $this->intuSens;
}

//Evaluates the section of Feeling or Thinking, working with the partial thinkingFeeling.blade.php testi > partials
    public function feelingOrThinking(){


        $result = 0;
         if($feelingThinking = request()->input('q.feelingThinking')){
            foreach($feelingThinking as $question){
                $result = $result + $question;
            }    
        }

        // $ftq1 = Input::get('ftq1');
        // $ftq2 = Input::get('ftq2');
        // $ftq3 = Input::get('ftq3');
        // $ftq4 = Input::get('ftq4');
        // $ftq5 = Input::get('ftq5');
        // $ftq6 = Input::get('ftq6');
        // $ftq7 = Input::get('ftq7');
        // $ftq8 = Input::get('ftq8');
        // $ftq9 = Input::get('ftq9');
        // $ftq10 = Input::get('ftq10');
        // $ftq11 = Input::get('ftq11');

        //add the inpute values
        // $result = $ftq1 + $ftq2 + $ftq3 + $ftq4 + $ftq5 + $ftq6 + $ftq7 + $ftq8 + $ftq9 + $ftq10 + $ftq11;

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

        return $this->ftfinalProcentRez;
//        $this->ftendresult = $this->finalProcentRez . "% " . $this->feelingThinking;
    }

//Evaluates the section of Judging or Perspekting, working with the partial judgingPerspecting.blade.php testi > partials
    public function judgingOrperspecting(){


        $result = 0;
         if($jundgingPerciving = request()->input('q.jundgingPerciving')){
            foreach($jundgingPerciving as $question){
                $result = $result + $question;
            }    
        }

        // $jp1 = Input::get('jp1');
        // $jp2 = Input::get('jp2');
        // $jp3 = Input::get('jp3');
        // $jp4 = Input::get('jp4');
        // $jp5 = Input::get('jp5');
        // $jp6 = Input::get('jp6');
        // $jp7 = Input::get('jp7');
        // $jp8 = Input::get('jp8');
        // $jp9 = Input::get('jp9');
        // $jp10 = Input::get('jp10');
        // $jp11 = Input::get('jp11');

        //add the inpute values
        // $result = $jp1 + $jp2 + $jp3 + $jp4 + $jp5 + $jp6 + $jp7 + $jp8 + $jp9 + $jp10 + $jp11;

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

