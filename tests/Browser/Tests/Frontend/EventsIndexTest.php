<?php

namespace Tests\Browser\Frontend;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class EventsIndexTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */

    /** @test
     * @group dusk
     */
    public function visit_frontend_events_index()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('frontend.events.index')
                    ->assertRouteIs('frontend.events.index');
        });
    }
}
