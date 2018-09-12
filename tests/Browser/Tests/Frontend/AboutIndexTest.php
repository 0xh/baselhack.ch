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

            $this->check_seo($browser);
        });
    }


    protected  function check_seo(\Laravel\Dusk\Browser $browser)
    {
        $browser->assertTitleContains(\Illuminate\Support\Facades\Lang::get('frontend/meta.about_index.title'));
    }


}
