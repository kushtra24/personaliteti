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

use App\Page;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('post.blog');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/profile', 'UserController@index')->name('profile');
//Route::get('/home', 'HomeController@show');

Route::group(['test' => 'test'], function(){
    Route::get('/testip', 'TestController@doTheTest')->name('testi');
    Route::post('/result', 'TestController@introExtroQuestions');
    Route::get('/result', 'TestController@introExtroQuestionsResult');
    Route::post('/home', 'TestController@introExtroQuestions');
});


 Route::get('faqe/{slug}', function($slug)
    {
        try {
            $page =  Page::where('slug', $slug)->first();
            return view('pages.page')
            ->with('content', $page->content)
            ->with('title', $page->title)
            ;
        } catch (Exception $e) {
            return abort(404);
        }
        
    });

 
// Route::group(['post' => 'post'], function(){
    // Route::post('/post/store', 'PostController@store');
    // Route::post('/post/{id}/update', 'PostController@update')->name('PostController.update');
    // Route::post('/post/{id}/delete', 'PostController@destroy')->name('PostController.destroy');
// });

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

Route::group(['tipet' => 'tipet'], function(){
	Route::get('/tipet', 'TipetController@index')->name('tipet');
    Route::get('/tipi/{id}', 'TipetController@show')->name('tipi');
});

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');


// User role authentification and access gration
Route::group(['middleware' => 'web'], function () {

    Route::get('/admin', ['uses' => 'AdminController@index', 'middleware' => 'roles', 'roles' => ['Admin', 'Author']]);
    //Posts
    Route::get('/post', ['uses' => 'PostController@index', 'middleware' => 'roles', 'roles' => ['Admin', 'Author']]);
    Route::get('/post/create', ['uses' => 'PostController@create', 'middleware' => 'roles', 'roles' => ['Admin', 'Author']]);
    Route::get('/post/{id}', ['uses' => 'PostController@show', 'middleware' => 'roles', 'roles' => ['Admin', 'Author']]);
    Route::get('/post/edit/{id}', ['uses' => 'PostController@edit', 'middleware' => 'roles', 'roles' => ['Admin', 'Author']]);
    Route::post('/post/store', ['uses' => 'PostController@store', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::post('/post/{id}/update', ['uses' => 'PostController@update', 'as' => 'PostController.update', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::post('/post/{id}/delete', ['uses' => 'PostController@destroy', 'as' => 'PostController.destroy', 'middleware' => 'roles', 'roles' => ['Admin', ]]);
    //Questions
    Route::get('/pyetjet', ['uses' => 'QuestionsController@index', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::get('/pyetjet/create', ['uses' => 'QuestionsController@create', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::post('/pyetjet/store', ['uses' => 'QuestionsController@store', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::get('/pyetjet/{id}', ['uses' => 'QuestionsController@show', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::get('/pyetjet/{id}/edit', ['uses' => 'QuestionsController@edit', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::post('/pyetjet/{id}/edit', ['uses' => 'QuestionsController@update', 'as' => 'QuestionsController.update', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::post('/pyetjet/{id}/delete', ['uses' => 'QuestionsController@destroy', 'as' => 'QuestionsController.destroy', 'middleware' => 'roles', 'roles' => ['Admin']]);
    //Tipi
    Route::get('/admintipet', ['uses' => 'TipetController@showTypes', 'as' => 'admintipet', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::get('/admintipet/{id}', ['uses' => 'TipetController@edit', 'as' => 'admintipet', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::post('/admintipet/{id}/update', ['uses' => 'TipetController@update', 'as' => 'admintipet.update', 'middleware' => 'roles', 'roles' => ['Admin']]);
    //pages
    Route::get('/faqet', ['uses' => 'PageController@index', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::get('/faqet/create', ['uses' => 'PageController@create', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::post('/faqet/store', ['uses' => 'PageController@store', 'as' => 'page.post','middleware' => 'roles', 'roles' => ['Admin']]);
    Route::get('/faqet/{id}', ['uses' => 'PageController@show', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::get('/faqet/{id}/edit', ['uses' => 'PageController@edit', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::post('/faqet/{id}/update', ['uses' => 'PageController@update', 'as' => 'page.update', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::post('/faqet/{id}/delete', ['uses' => 'PageController@destroy', 'as' => 'page.destroy', 'middleware' => 'roles', 'roles' => ['Admin']]);
});
