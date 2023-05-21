<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    // this is like a place for custom bootstrapping.
    // we'll define all our stuff here for special porting.
    public function boot(): void
    {
    }
}
