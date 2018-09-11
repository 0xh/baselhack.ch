<?php

namespace App\App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class Transformation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'transformation:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Database Migrations';

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
        $this->confirm('Confirm Transformation');

        Artisan::call('migrate:fresh', ['--database' => env('DB_CONNECTION'), '--force' => true]);
        Artisan::call('db:seed', ['--database' => env('DB_CONNECTION'), '--force' => true]);

        Artisan::call('transform-backup:participants');
        $this->info('Transformed Participants');

        Artisan::call('transform-backup:notifications');
        $this->info('Transformed Notifications');
    }
}
