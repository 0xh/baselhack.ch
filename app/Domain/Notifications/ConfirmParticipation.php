<?php

namespace App\Domain\Notifications;

use Illuminate\Bus\Queueable;
use App\Domain\Models\Participant;
use Illuminate\Support\Facades\Lang;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ConfirmParticipation extends Notification implements ShouldQueue
{
    use Queueable;

    protected $participant;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Participant $participant)
    {
        $this->participant = $participant;
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
        return ['database', 'mail'];
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
                    ->subject(Lang::get('frontend/notifications.confirm_participation.subject'))
                    ->greeting(Lang::get('frontend/notifications.confirm_participation.greeting').$this->participant->firstname)
                    ->line(Lang::get('frontend/notifications.confirm_participation.line'))
                    ->action(Lang::get('frontend/notifications.confirm_participation.action'), route('frontend.events.signup.confirm', $this->participant))
                    ->line(Lang::get('frontend/notifications.confirm_participation.salutation'));
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

            'uuid' => $this->participant->uuid,
            'type' => $this->participant->type,
            'company' => $this->participant->company,
            'firstname' => $this->participant->firstname,
            'lastname' => $this->participant->lastname,
            'email' => $this->participant->email,
        ];
    }
}
