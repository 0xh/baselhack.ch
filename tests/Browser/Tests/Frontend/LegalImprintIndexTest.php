<?php

namespace Tests\Browser\Frontend;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class LegalImprintIndexTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */

    /** @test
     * @group dusk
     */
    public function visit_frontend_legal_imprint_index()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('frontend.legal.imprint.index')
                    ->assertRouteIs('frontend.legal.imprint.index');
        });
    }
}
