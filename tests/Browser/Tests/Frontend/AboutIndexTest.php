<?php

namespace Tests\Browser\Frontend;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class AboutIndexTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */

    /** @test
     * @group dusk
     */
    public function visit_frontend_about_index()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('frontend.about.index')
                    ->assertRouteIs('frontend.about.index');
        });
    }
}
