<?php

namespace Tests\Browser\Frontend;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LegalImprintIndexTest extends DuskTestCase
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
    public function visit_frontend_legal_imprint_index()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('frontend.legal.imprint.index')
                    ->assertRouteIs('frontend.legal.imprint.index');

            $this->check_seo($browser);
        });
    }

    protected function check_seo(\Laravel\Dusk\Browser $browser)
    {
        $browser->assertTitleContains(\Illuminate\Support\Facades\Lang::get('frontend/meta.imprint_index.title'));
    }
}
