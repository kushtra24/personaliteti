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
    // Route::get('/testi', 'testController@showQuestions')->name('showQuestions');
    //post the patients deetails to the database and return to patients
    Route::post('/result', 'testController@introExtroQuestions');
    Route::get('/result', 'testController@introExtroQuestionsResult');
    Route::post('/home', 'testController@introExtroQuestions');
    // Route::get('/admintesti', 'testController@edit');
});

Route::group(['question' => 'question'], function(){
    Route::get('/pyetjet', 'QuestionsController@index');
    Route::get('/pyetjet/create', 'QuestionsController@create');
    Route::post('/pyetjet/store', 'QuestionsController@store');
    Route::get('/pyetjet/{id}', 'QuestionsController@show');
    Route::get('/pyetjet/{id}/edit', 'QuestionsController@edit');
});


Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

Route::group(['tipet' => 'tipet'], function(){
	Route::get('/tipet', 'tipetController@index')->name('tipet');
    Route::get('/tipi/{id}', 'tipetController@show')->name('tipi');
    Route::get('/admintipet', 'tipetController@showTypes')->name('admintipet');
	Route::get('/admintipet/{id}', 'tipetController@edit')->name('admintipet');
    Route::post('/admintipet/{id}/update', 'tipetController@update')->name('admintipet.update');
});

// Route::group(['admin' => 'admin'], function(){
// 	Route::get('/admin', 'adminController@index')->name('admin');
// });

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');


// User role authentification and access gration
Route::group(['middleware' => 'web'], function () {

    // Route::get('/', function () {
    //     return view('index');
    // })->name('main');

    // Route::get('/author', [
    //     'uses' => 'AppController@getAuthorPage',
    //     'as' => 'author',
    //     'middleware' => 'roles',
    //     'roles' => ['Admin', 'Author']
    // ]);

    // Route::get('/author/createArticle', [
    //     'uses' => 'AppController@getGenerateArticle',
    //     'as' => 'author.article',
    //     'middleware' => 'roles',
    //     'roles' => ['Admin', 'Author']
    // ]);

    Route::get('/admin', [
        'uses' => 'adminController@index',
        'as' => 'admin',
        'middleware' => 'roles',
        'roles' => ['Admin', 'Author']
    ]);


});
