<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Notifications\contactReceiveNotification;
use App\services\Emailservice as ServicesEmailservice;

class SendContactEmailJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public $email;
    public $contact;
    public function __construct($email,$contact)
    {
        $this->email=$email;
        $this->contact =$contact;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

        //resolve the sending email service
        $emailService = app( ServicesEmailservice::class,[
            'email'=>$this->email,
            'client'=>$this->contact
        ]);
        //send email to the client
        $emailService->sendCleintEmail();
        //send the email to the admin that a client  that a cleint send a request
        $emailService->sendAdminEmail();

    }
}
