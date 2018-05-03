<?php

namespace App\App\Console\Commands;

use Illuminate\Console\Command;
use Newsletter as SpatieNewsletter;
use App\Domain\Events\Models\Newsletter;

class SyncNewsletters extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:newsletters';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync Newsletters from Mailchimp';

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
        $members = SpatieNewsletter::getMembers()['members'];

        foreach ($members as $member) {
            if ($member['status'] === 'subscribed') {
                Newsletter::firstOrCreate([

                'email' => $member['email_address'],
            ]);
            } elseif ($member['status'] === 'unsubscribed') {
                try {
                    $newsletter = Newsletter::whereEmail($member['email_address'])->first();

                    if (! empty($newsletter)) {
                        $newsletter->delete();
                    }
                } catch (\Exception $exception) {
                }
            }
        }

        $newsletters = Newsletter::all();

        foreach ($newsletters as $newsletter) {
            if (! SpatieNewsletter::isSubscribed($newsletter->email)) {
                $newsletter->delete();
            }
        }
    }
}
