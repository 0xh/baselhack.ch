<?php

namespace App\App\Console\Commands;

use Illuminate\Console\Command;
use App\Domain\Models\Participant;
use App\Domain\Notifications\ConfirmParticipation;
use App\Domain\Jobs\SubscribeToParticipantNewsletter;

class Confirmation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'confirmation:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Confirmation E-Mails to Participants';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $participants = Participant::where('confirmed_email', false)->get();

        if ($participants->count()) {
            foreach ($participants as $participant) {
                $count = $participant->notifications()->where('type', 'App\Domain\Notifications\ConfirmParticipation')->get()->count();

                if ($count <= 0) {
                    $participant->notify(new ConfirmParticipation($participant));

                    SubscribeToParticipantNewsletter::dispatch($participant);
                }
            }
        }

        $this->info('Done');
    }
}
