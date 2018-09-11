<?php

namespace Tests\Browser\Frontend;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class PartnersIndexTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */


    /** @test
     * @group dusk
     */

    public function visit_frontend_partners_index()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('frontend.partners.index')
                    ->assertRouteIs('frontend.partners.index');
        });
    }
}
