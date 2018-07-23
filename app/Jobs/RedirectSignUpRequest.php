<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class RedirectSignUpRequest implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $signup;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($signup)
    {
        $this->signup = $signup;
    }

    public function tags()
    {
        return ['redirect-signup-request-job'];
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $emails = config('baselhack.notifications.signup');

        if ($emails) {
            foreach ($emails as $email) {
                Mail::to($email)->send(new \App\Mail\RedirectSignUpRequest($this->signup));
            }
        } else {

            /* @todo Log Something */
        }
    }
}
