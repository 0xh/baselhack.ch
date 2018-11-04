<?php

namespace App\Domain\Notifications;

use App\Domain\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SendPlatformInvitationNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
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
                    ->subject('Invitation: baselhack.ch')
                    ->greeting('Hello '.$this->user->name)
                    ->line('You\'ve received an invitation to access the administration panel from Baselhack with your E-mail: '.$this->user->email.' Your initial password is set to "Baselhack2018$$".')

                    ->action('Click here to Log-In', url('/manager'))
                    ->salutation('Happy editing, Sebastian');
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

            'uuid' => $this->user->uuid,
            'name' => $this->user->lastname,
            'email' => $this->user->email,
        ];
    }
}
