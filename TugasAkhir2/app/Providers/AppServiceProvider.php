<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use View;
use App\Model\Home;
use App\Model\Client;

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
        $home = Home::all();
        View::composer('user.home', function($view) use($home){
            $view->with('home', $home);
        });

        $client = Client::all();
        View::composer('user.client', function($view) use($client){
            $view->with('client', $client);
        });
    }
}
