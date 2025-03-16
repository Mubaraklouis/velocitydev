<?php

namespace App\Providers;

use App\Services\NewsletterService;
use Illuminate\Support\ServiceProvider;

class NewsLetterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

        $this->app->bind(NewsletterService::class, function ($app,$parameters) {
            $email = $parameters['email'] ?? null;
            return new NewsletterService($email);
        });


    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

    }
}
