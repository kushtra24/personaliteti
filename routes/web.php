<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@show');

Route::group(['test' => 'test'], function(){
    Route::get('/testi', 'testController@doTheTest')->name('testi');
    //post the patients deetails to the database and return to patients
    Route::post('/result', 'testController@introExtroQuestions');
    Route::get('/result', 'testController@introExtroQuestionsResult');
    Route::post('/home', 'testController@introExtroQuestions');
});
Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

