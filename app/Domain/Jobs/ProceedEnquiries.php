<?php

namespace App\Domain\Jobs;

use App\Domain\Models\User;
use Illuminate\Bus\Queueable;
use App\Domain\Models\Enquiry;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Domain\Notifications\ConfirmRequest;
use App\Domain\Notifications\DeliverRequest;

class ProceedEnquiries implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable;

    protected $enquiry;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Enquiry $enquiry)
    {
        $this->enquiry = $enquiry;
    }

    public function tags()
    {
        return ['proceed-enquiries-job'];
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $users = User::whereJsonContains('notifications', $this->enquiry->type)->get();

        if ($users->count()) {
            foreach ($users as $user) {
                $user->notify(new DeliverRequest($this->enquiry));
            }
        }

        $this->enquiry->notify(new ConfirmRequest($this->enquiry));
    }
}
