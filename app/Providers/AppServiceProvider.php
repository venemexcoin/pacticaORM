<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);

        /*$this->app->bind('path.public', function(){

            return base_path().'/public_html';

         });*/
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view::share('theme', 'lte');

        view::share('theme1', 'lteError');
        view::share('theme2', 'lteError');
        view::share('theme3', 'lteError');
        view::share('theme4', 'lteError');
        view::share('theme5',   'frone');
        view::share('theme6', 'lteError');

    }
}
