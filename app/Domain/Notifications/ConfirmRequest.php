<?php

namespace App\Domain\Notifications;

use Illuminate\Bus\Queueable;
use App\Domain\Models\Enquiry;
use Illuminate\Support\Facades\Lang;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ConfirmRequest extends Notification implements ShouldQueue
{
    use Queueable;

    protected $enquiry;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Enquiry $enquiry)
    {
        $this->enquiry = $enquiry;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed $notifiable
     *
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed $notifiable
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject(Lang::get('frontend/notifications.confirm_request.subject'))
            ->greeting(Lang::get('frontend/notifications.confirm_request.greeting').' '.$this->enquiry->name)
            ->line(Lang::get('frontend/notifications.confirm_request.line'))
            ->line(Lang::get('frontend/notifications.confirm_request.salutation'))
            ->line($this->enquiry->message);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed $notifiable
     *
     * @return array
     */
    public function toArray($notifiable)
    {
        return [

            'uuid' => $this->enquiry->uuid,
            'type' => $this->enquiry->type,
            'company' => $this->enquiry->company,
            'name' => $this->enquiry->name,
            'email' => $this->enquiry->email,
            'message' => $this->enquiry->message,

        ];
    }
}
