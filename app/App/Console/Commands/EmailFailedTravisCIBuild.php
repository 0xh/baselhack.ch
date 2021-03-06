<?php

namespace App\App\Console\Commands;

use App\Mail\DuskFailure;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class EmailFailedTravisCIBuild extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:failure';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'E-Mail failed Travis CI Builds';

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
        Mail::to('info@onicial.ch')->send(new DuskFailure());
    }
}
