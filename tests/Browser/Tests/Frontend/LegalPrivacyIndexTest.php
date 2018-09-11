<?php

namespace Tests\Browser\Frontend;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class LegalPrivacyIndexTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */


    /** @test
     * @group dusk
     */

    public function visit_frontend_lega_privacy_index()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('frontend.legal.privacy.index')
                    ->assertRouteIs('frontend.legal.privacy.index');
        });
    }
}
