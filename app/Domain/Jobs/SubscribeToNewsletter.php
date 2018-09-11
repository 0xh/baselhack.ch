<?php

namespace App\Domain\Jobs;

use Newsletter;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SubscribeToNewsletter implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $list;
    protected $email;
    protected $firstname;
    protected $lastname;
    protected $company;
    public $gdpr;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(bool $gdpr, string $list, $email, $firstname = '', $lastname = '', $company = '')
    {
        $this->company = $company;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->list = $list;
        $this->gdpr = $gdpr;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        switch ($this->gdpr) {
            case true:
                Newsletter::subscribePending($this->email, ['FNAME' => $this->firstname, 'LNAME' => $this->lastname,  'COMPANY' => $this->company], $this->list);
                break;

            default:
                Newsletter::subscribe($this->email, ['FNAME' => $this->firstname, 'LNAME' => $this->lastname,  'COMPANY' => $this->company], $this->list);
                break;
        }
    }
}
