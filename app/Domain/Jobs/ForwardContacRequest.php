<?php

namespace App\Domain\Jobs;

use Illuminate\Bus\Queueable;
use App\Domain\Objects\Contact;
use App\Domain\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ForwardContacRequest implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $contact;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
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
        $emails = config('baselhack.notifications.'.$this->contact->topic);

        if ($emails) {
            foreach ($emails as $email) {
                Mail::to($email)->send(new ContactForm($this->contact));
            }
        } else {

            /* @todo Log Something */
        }
    }
}
