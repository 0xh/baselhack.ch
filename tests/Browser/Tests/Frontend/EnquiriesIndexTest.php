<?php

namespace Tests\Browser\Frontend;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class EnquiriesIndexTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */


    /** @test
     * @group dusk
     */

    public function visit_frontend_enquiries_index()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('frontend.enquiries.index')
                    ->assertRouteIs('frontend.enquiries.index');
        });
    }
}
