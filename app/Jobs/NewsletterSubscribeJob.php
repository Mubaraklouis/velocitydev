<?php

namespace App\Jobs;

use App\Services\NewsletterService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Spatie\Newsletter\NewsletterServiceProvider;

class NewsletterSubscribeJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */

     public $email;
    public function __construct($email)
    {
        $this->email =$email;

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {


            //resolve the sending email service
            $newsletterService = app( NewsletterService::class,[
                'email'=>$this->email
            ]);

            $newsletterService->subscribe();

    }
}
