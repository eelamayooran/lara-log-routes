<?php

namespace LogRoutesPackage\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class LogRoutesServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // No registration is necessary in this case
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Only load the routes in development or local environment
        if (app()->environment('local', 'development')) {
            // Define the routes
            $this->loadRoutesFrom(__DIR__.'/../../routes/log-routes.php');
        }
    }
}
