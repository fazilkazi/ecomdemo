<?php

namespace App\Providers;
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
        view()->share('catagories', DB::table('catagories')->get());
        view()->share('products', DB::table('products')->get());
    }
}
