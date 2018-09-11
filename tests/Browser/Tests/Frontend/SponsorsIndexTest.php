<?php

namespace Tests\Browser\Frontend;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class SponsorsIndexTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */


    /** @test
     * @group dusk
     */

    public function visit_frontend_sponsors_index()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('frontend.sponsors.index')
                    ->assertRouteIs('frontend.sponsors.index');
        });
    }
}
