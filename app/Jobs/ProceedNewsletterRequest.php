<?php

namespace App\Jobs;

use Newsletter;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;


class ProceedNewsletterRequest implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $newsletter;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($newsletter)
    {
        $this->newsletter = $newsletter;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Newsletter::subscribe($this->newsletter['email']);
    }
}
