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
Route::get('/profile', 'userController@index')->name('profile');
//Route::get('/home', 'HomeController@show');

Route::group(['test' => 'test'], function(){
    Route::get('/testip', 'testController@doTheTest')->name('testi');
    Route::post('/result', 'testController@introExtroQuestions');
    Route::get('/result', 'testController@introExtroQuestionsResult');
    Route::post('/home', 'testController@introExtroQuestions');
});


Route::group(['post' => 'post'], function(){
    Route::post('/post/store', 'postController@store');
    Route::get('/post/{id}', 'postController@show');
    Route::get('/post/{id}/edit', 'postController@edit');
    Route::post('/post/{id}/edit', 'postController@update')->name('postController.update');
    Route::post('/post/{id}/delete', 'postController@destroy')->name('postController.destroy');
});

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

Route::group(['tipet' => 'tipet'], function(){
	Route::get('/tipet', 'tipetController@index')->name('tipet');
    Route::get('/tipi/{id}', 'tipetController@show')->name('tipi');
});

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');


// User role authentification and access gration
Route::group(['middleware' => 'web'], function () {

    Route::get('/admin', ['uses' => 'adminController@index', 'middleware' => 'roles', 'roles' => ['Admin', 'Author']]);
    //Posts
    Route::get('/post', ['uses' => 'postController@index', 'middleware' => 'roles', 'roles' => ['Admin', 'Author']]);
    Route::get('/post/create', ['uses' => 'postController@create', 'middleware' => 'roles', 'roles' => ['Admin', 'Author']]);
    //Questions
    Route::get('/pyetjet', ['uses' => 'QuestionsController@index', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::get('/pyetjet/create', ['uses' => 'QuestionsController@create', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::post('/pyetjet/store', ['uses' => 'QuestionsController@store', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::get('/pyetjet/{id}', ['uses' => 'QuestionsController@show', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::get('/pyetjet/{id}/edit', ['uses' => 'QuestionsController@edit', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::post('/pyetjet/{id}/edit', ['uses' => 'QuestionsController@update', 'as' => 'QuestionsController.update', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::post('/pyetjet/{id}/delete', ['uses' => 'QuestionsController@destroy', 'as' => 'QuestionsController.destroy', 'middleware' => 'roles', 'roles' => ['Admin']]);
    //Tipi
    Route::get('/admintipet', ['uses' => 'tipetController@showTypes', 'as' => 'admintipet', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::get('/admintipet/{id}', ['uses' => 'tipetController@edit', 'as' => 'admintipet', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::post('/admintipet/{id}/update', ['uses' => 'tipetController@update', 'as' => 'admintipet.update', 'middleware' => 'roles', 'roles' => ['Admin']]);
    //pages
    Route::get('/faqet', ['uses' => 'pageController@index', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::get('/faqet/create', ['uses' => 'pageController@create', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::post('/faqet/store', ['uses' => 'pageController@store', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::get('/faqet/{id}', ['uses' => 'pageController@show', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::get('/faqet/{id}/edit', ['uses' => 'pageController@edit', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::post('/faqet/{id}/edit', ['uses' => 'pageController@update', 'as' => 'page.update', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::post('/faqet/{id}/delete', ['uses' => 'pageController@destroy', 'as' => 'page.destroy', 'middleware' => 'roles', 'roles' => ['Admin']]);
});
