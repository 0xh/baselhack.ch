<?php

namespace Tests\Browser\Frontend;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class HomeIndexTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */


    /** @test
     * @group dusk
     */

    public function visit_frontend_home_index()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('frontend.home.index')
                    ->assertRouteIs('frontend.home.index');
        });
    }
}
