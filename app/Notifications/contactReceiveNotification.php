<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class contactReceiveNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */

     public $client;
    public function __construct($client)
    {
      $this->client = $client;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
        ->subject('New Client Request')
        ->line('A new client has made a request.')
        ->line('Client Name:   ' . $this->client['full_name'])
        ->line('Email  '.$this->client['email'])
        ->line('Phone Number  '.$this->client['phone'])
        ->line('Request Details: ' . $this->client['message'])
        ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
        'client'=>$this->client
        ];
    }
}
