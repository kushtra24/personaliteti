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

Route::get('/about', function () {
    return view('about');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/blog', 'PostController@blog')->name('blog');
Route::get('/archiveFilter', 'PostController@archiveFilterd')->name('archiveFilterd');
Route::get('/categoryfilter/{category}', 'CategoryController@categoryfilter')->name('categoryfilter');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['test' => 'test'], function(){
    Route::get('/vlersimi', 'TestController@doTheTest')->name('testi');
    // Route::get('/result', 'Auth\RegisterController@notvalide');
    Route::post('/result', 'TestController@introExtroQuestions')->name('result'); //->middleware('throttle:1,2')
    Route::get('/result', 'TestController@introExtroQuestionsResult');
});

Route::post('/search', 'PostController@search');
Route::post('/admin', 'AdminController@questionResult');

 Route::get('faqe/{slug}', function($slug)
    {
        try {
            $page =  Page::where('slug', $slug)->first();
            return view('pages.page')
            ->with('content', $page->content)
            ->with('title', $page->title);

            // $page = Page::slug();

        } catch (Exception $e) {
            return abort(404);
        }
        
    });

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

Route::group(['tipet' => 'tipet'], function(){
	Route::get('/tipet', 'TipetController@index')->name('tipet');
    Route::get('/tipi/{name}', 'TipetController@show')->name('tipi');
});

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');


// User role authentification and access gration
Route::group(['middleware' => 'web'], function () {

    Route::get('/admin', ['uses' => 'AdminController@index', 'as' => 'admin', 'middleware' => 'roles', 'roles' => ['Admin', 'Author']]);

    //Posts
    Route::get('/post', ['uses' => 'PostController@index', 'middleware' => 'roles', 'roles' => ['Admin', 'Author']]);
    Route::get('/post/create', ['uses' => 'PostController@create', 'middleware' => 'roles', 'roles' => ['Admin', 'Author']]);
    Route::get('/blog/{id}', 'PostController@show');
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

    //Comments
    Route::get('/comments', ['uses' => 'CommentController@index', 'middleware' => 'roles', 'roles' => ['Admin', 'Author']]);
    Route::get('/comments/create', ['uses' => 'CommentController@create', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::post('/post/{post}/comment', 'CommentController@store')->name('comment.store');
    Route::get('/comments/{id}', ['uses' => 'CommentController@show', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::get('/comments/{id}/edit', ['uses' => 'CommentController@edit', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::post('/comments/{id}/update', ['uses' => 'CommentController@update', 'as' => 'comments.update', 'middleware' => 'roles', 'roles' => ['Admin']]);
    Route::post('/comments/delete/{id}', ['uses' => 'CommentController@destroy', 'as' => 'comments.destroy', 'middleware' => 'roles', 'roles' => ['Admin']]);

    //Category
    Route::get('/categories', ['uses' => 'CategoryController@index', 'middleware' => 'roles', 'roles' => ['Admin', 'Author']]);
    Route::get('/categories/create', ['uses' => 'CategoryController@create', 'middleware' => 'roles', 'roles' => ['Admin', 'Author']]);
    Route::get('/categories/{id}', 'CategoryController@show');
    Route::get('/categories/{id}/edit', ['uses' => 'CategoryController@edit', 'middleware' => 'roles', 'roles' => ['Admin', 'Author']]);
    Route::post('/categories/store', ['uses' => 'CategoryController@store', 'middleware' => 'roles', 'roles' => ['Admin', 'Author']]);
    Route::post('/categories/{id}/update', ['uses' => 'CategoryController@update', 'as' => 'category.update', 'middleware' => 'roles', 'roles' => ['Admin', 'Author']]);
    Route::post('/categories/delete/{id}', ['uses' => 'CategoryController@destroy', 'as' => 'category.destroy', 'middleware' => 'roles', 'roles' => ['Admin', 'Author']]);

    //profile
    Route::get('/profile', ['uses' => 'UserController@index', 'as' => 'profile', 'middleware' => 'roles', 'roles' => ['Admin', 'Author', 'User']]);
    Route::get('/profili/{id}/edit', ['uses' => 'UserController@edit', 'middleware' => 'roles', 'roles' => ['Admin', 'Author', 'User']]);
    Route::post('/profili/{id}/update', ['uses' => 'UserController@update', 'as' => 'UserController.update', 'middleware' => 'roles', 'roles' => ['Admin', 'Author', 'User']]);

    //Gallery
    Route::get('/galeria', ['uses' => 'GalleryController@index', 'middleware' => 'roles', 'roles' => ['Admin', 'Author']]);
    Route::post('/galeria/store', ['uses' => 'GalleryController@store', 'middleware' => 'roles', 'roles' => ['Admin', 'Author']]);
    Route::get('/galleria/{id}', ['uses' => 'GalleryController@show', 'middleware' => 'roles', 'roles' => ['Admin', 'Author']]);
    Route::post('/galleria/delete/{id}', ['uses' => 'GalleryController@destroy', 'as' => 'gallery.destroy', 'middleware' => 'roles', 'roles' => ['Admin', 'Author']]);

});

