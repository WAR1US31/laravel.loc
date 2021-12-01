<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       /* DB::listen(function ($query) {
            dump($query->sql);
        });*/

        view()->composer('layouts.footer', function ($view){
            $view->with('categories', Category::all());
        });

        Paginator::useBootstrap();
    }
}
