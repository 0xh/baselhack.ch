<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class RedirectContactRequest implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $contact;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    public function tags()
    {
        return ['redirect-contact-request-job'];
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $emails = config('baselhack.notifications.contact_form');

        if ($emails) {
            foreach ($emails as $email) {
                Mail::to($email)->send(new \App\Mail\RedirectContactRequest($this->contact));
            }
        } else {
            dd('else');

            /* @todo Log Something */
        }
    }
}
