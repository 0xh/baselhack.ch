<?php

namespace App\Domain\Notifications;

use App\Domain\Models\Enquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Lang;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ConfirmRequest extends Notification implements ShouldQueue
{
    use Queueable;

    protected $contact;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Enquiry $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     *
     * @return array
     */
    public function via($notifiable)
    {
        return ['database','mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject(Lang::get('frontend/notifications.confirm_request.subject'))
                    ->greeting(Lang::get('frontend/notifications.confirm_request.greeting'). ' ' . $this->contact->name)
                    ->line(Lang::get('frontend/notifications.confirm_request.line'))
                    ->line($this->contact->message)
                    ->salutation(Lang::get('frontend/notifications.confirm_request.salutation'));

    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     *
     * @return array
     */
    public function toArray($notifiable)
    {
        return [

        ];
    }
}
