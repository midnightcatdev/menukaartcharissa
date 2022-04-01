<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class InvoicePaid extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->from('ccvandelden@msn.com', 'Charizard van Delden')
            ->subject('Bedankt voor uw vraag')
            ->greeting('Beste, $Variabel')
            ->line('Bedankt voor uw aanvraag wij streven ernaar om u binnen 2 werkdagen bericht terug te geven.')
            ->attach('images/kat.jpg');
    }

//    /**
//     * Get the Slack representation of the notification.
//     *
//     * @param  mixed  $notifiable
//     * @return \Illuminate\Notifications\Messages\SlackMessage
//     */
//    public function toSlack($notifiable)
//    {
//        return (new SlackMessage)
//            ->content('One of your invoices has been paid!');
//    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
