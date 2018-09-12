<?php

namespace App\App\Console\Commands\Migrations;

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
        $staging_database = DB::connection(env('STAGING_DB_CONNECTION'));

        foreach ($staging_database->table('participants')->get() as $notifications) {
            DB::table('participants')->insert((array) $notifications);
        }


    }
}
