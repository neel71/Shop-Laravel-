<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Category;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        
        View::composer('frontEnd.includes.menu',function($view){
            $publisgedCategory = Category::where('publicationStatus',1)->get();
            $view->with('publisgedCategory',$publisgedCategory);
        });
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
