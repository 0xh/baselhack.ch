<?php

namespace Tests\Browser\Tests\Users\Dashboard;

use Tests\DuskTestCase;
use App\Domain\Users\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class NewsletterTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * @test
     * @group frontend
     * @group newsletter
     */
    public function a_guet_can_subscribe_for_an_newsletter()
    {
        $user = create(User::class);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/')
                ->assertPathIs('/')
                ->clear('#email')
                ->type('#email', 'max.mustermann@onicial.ch')
                ->click('@subscribe-for-newsletter-button')
                ->assertSee('Successfully subscribed!');
        });
    }
}
