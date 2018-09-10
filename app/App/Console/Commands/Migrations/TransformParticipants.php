<?php

namespace App\App\Console\Commands\Migrations;

use App\Domain\Jobs\SubscribeToParticipantNewsletter;
use Illuminate\Console\Command;
use App\Domain\Models\Participant;
use Illuminate\Support\Facades\DB;

class TransformParticipants extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'transform-backup:participants';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Transform Participants';

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
        try {
            $staging_database = DB::connection(env('STAGING_DB_CONNECTION'));

            $staging_participants = $staging_database->table('participants')->where('type', 'participant')->get();
            
            foreach ($staging_participants as $staging_participant) {
                $participant = Participant::create([
                    'id' => $staging_participant->id,
                    'uuid' => $staging_participant->uuid,
                    'firstname' => $staging_participant->firstname,
                    'lastname' => $staging_participant->lastname,
                    'company' => $staging_participant->company,
                    'email' => $staging_participant->email,
                    'confirmed_email' => $staging_participant->confirmed_email,
                    'over_eighteen' => $staging_participant->over_eighteen,
                    'accepted_policy' => $staging_participant->accepted_policy,
                ]);
            }
        } catch (\Exception $exception) {
        }
    }
}
