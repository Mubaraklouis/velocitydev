<?php

namespace App\Services;


class NewsletterService
{

    protected $email;
    protected $apiKey;
    protected $listId;
    protected $client;

    public function __construct($email)
    {
        $this->email = $email;
        $this->apiKey = env('MAILCHIMP_APIKEY'); // Get API key from .env
        $this->listId = env('MAILCHIMP_LIST_ID'); // Get List ID from .env
    }

    public function connect(){
        $client = new \MailchimpMarketing\ApiClient();
        $client->setConfig([
            'apiKey' => $this->apiKey,
            'server' => 'us3',
        ]);
        return $client;
    }

    public function subscribe(){

    $response = $this->connect()->lists->setListMember($this->listId, $this->email, [
        "email_address" => $this->email,
        "status_if_new" => "subscribed",
    ]);


    }

}
