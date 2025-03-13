<?php

namespace App\Providers;

use Emailservice;
use Illuminate\Support\ServiceProvider;

class emailServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(\App\services\Emailservice::class, function ($app,$parameters) {
            $email = $parameters['email'] ?? null;
            $client = $parameters['client'] ?? null;

            return new \App\services\Emailservice($email, $client);
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
