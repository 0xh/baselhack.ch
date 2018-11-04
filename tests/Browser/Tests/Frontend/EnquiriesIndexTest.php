<?php

namespace Tests\Browser\Frontend;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EnquiriesIndexTest extends DuskTestCase
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
    public function visit_frontend_enquiries_index()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('frontend.enquiries.index')
                    ->assertRouteIs('frontend.enquiries.index');

            $this->check_seo($browser);

        });
    }

    protected function check_seo(\Laravel\Dusk\Browser $browser)
    {
        $browser->assertTitleContains(\Illuminate\Support\Facades\Lang::get('frontend/meta.enquiries_index.title'));
    }
}
