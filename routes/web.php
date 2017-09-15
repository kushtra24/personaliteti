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


Route::group(['test' => 'test'], function(){


// Route::get('/testi', [
// 	'uses' => 'testController@create',
// 	'as' => 'testi',
// 	'middleware' => 'roles',
// 	'roles' => ['user', 'Author']
// 	]);


	// show patients list
Route::get('/testi', 'testController@create')->name('testi');

//post the patients deetails to the database and return to patients
Route::post('/result', 'testController@introExtroQuestions');


});



