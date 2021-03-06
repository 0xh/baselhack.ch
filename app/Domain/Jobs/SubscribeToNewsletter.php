<?php

namespace App\Domain\Jobs;

use Newsletter;
use App\Domain\Models\Note;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SubscribeToNewsletter implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Note::create([
            'email' => $this->email,
            'tag' => 'Newsletter',
        ]);

        /*        Newsletter::subscribePending($this->email, ['EMAIL' => $this->email, 'TYPE' => 'Newsletter'], 'baselhack');*/
    }
}
