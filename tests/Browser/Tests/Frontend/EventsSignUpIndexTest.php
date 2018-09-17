<?php

namespace Tests\Browser\Frontend;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EventsSignUpIndexTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A basic browser test example.
     *
     * @return void
     */

    /** @test
     * @group dusk
     */
    public function visit_frontend_events_signup_index()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('frontend.events.signup.index')
                    ->assertRouteIs('frontend.events.signup.index');
            $this->check_seo($browser);
        });
    }

    protected function check_seo(\Laravel\Dusk\Browser $browser)
    {
        $browser->assertTitleContains(\Illuminate\Support\Facades\Lang::get('frontend/meta.event_signup.title'));
    }
}
