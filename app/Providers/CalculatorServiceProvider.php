<?php

namespace App\Providers;

use Calculator;
use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

        $this->app->bind(Calculator::class,function($app){

            return new Calculator();

        });

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
