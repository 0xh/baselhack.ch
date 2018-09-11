<?php

namespace App\App\Console\Commands;

use Illuminate\Console\Command;
use App\Domain\Models\Participant;
use App\Domain\Notifications\ConfirmParticipation;
use App\Domain\Jobs\SubscribeToParticipantNewsletter;
use Spatie\Crawler\Crawler;
use Spatie\Sitemap\SitemapGenerator;

class Sitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a new Sitemap';

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
        SitemapGenerator::create(config('app.url'))
            ->configureCrawler(function (Crawler $crawler) {
                $crawler->setMaximumDepth(3);
            })
            ->writeToFile(public_path('sitemap.xml'));

    }
}
