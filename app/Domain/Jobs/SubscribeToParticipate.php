<?php

namespace App\Domain\Jobs;

use App\Domain\Models\Participant;
use Newsletter;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SubscribeToParticipate implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    protected $participant;


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
        Newsletter::subscribe($this->participant->email, [
            'UUID' => $this->participant->uuid,
            'TYPE' => 'Participants2018',
            'EMAIL' => $this->participant->email,
            'COMPANY' => $this->participant->company,
              'FIRSTNAME' => $this->participant->firstname,
            'LASTNAME' => $this->participant->lastname
        ],'baselhack');

    }
}
