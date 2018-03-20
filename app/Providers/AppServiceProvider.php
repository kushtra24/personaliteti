<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\TestCounter;
use App\User;
use App\Test;
Use App\Page;
use App\post;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        // \Cache::remember('counter', 120, function () {
        //     return View::share('counter', testCounter::first()->test_counter);
        // });
        // if ( Schema::hasColumn('test_counters', 'test_counter')) {
        	View::share('counter', TestCounter::first()->test_counter);
        // }
           
            View::share('posts', Post::orderBy('id', 'desc')->take(5)->get());
        
        // View::share('results', auth()->user()->Test);
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
