<?php

namespace App\Domain\Jobs;

use App\Domain\Models\Participant;
use Newsletter;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SubscribeToParticipantNewsletter implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $participant;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Participant $participant)
    {
        $this->participant = $participant;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Newsletter::subscribe($this->participant->email, ['FNAME'=>$this->participant->firstname, 'LNAME'=>$this->participant->lastname,  'COMPANY' => $this->participant->company], 'participants_2018');
    }
}
