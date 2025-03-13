<?php

namespace App\services;
/*
* methods: sendCleintEmail()
 This sends the client an email about there contact being received successfully
*
*
*/


use Illuminate\Support\Facades\Mail;
use App\Mail\ContactRecieveMail;
use App\Models\User;
use App\Notifications\contactReceiveNotification;

class Emailservice{
    public $email;
    public $client;


    public  function __construct($email,$client){
        $this->email = $email;
        $this->client =$client;

    }

    public function sendCleintEmail(){
         //send email to the client that thier email has been recieved
         Mail::to($this->email)->send(new ContactRecieveMail($this->client));

    }

    public function sendAdminEmail(){
        //find the user to send the email to
        $admin = User::find(1);
        $admin->notify(new contactReceiveNotification($this->client));

    }


}