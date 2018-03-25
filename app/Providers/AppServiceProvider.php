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

        	View::share('counter', TestCounter::first()->test_counter);
           
            View::share('posts', Post::orderBy('id', 'desc')->take(5)->get());
        
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
