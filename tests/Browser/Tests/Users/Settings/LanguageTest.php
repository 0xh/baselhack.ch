<?php

namespace Tests\Browser\Tests\Users\Settings;

use Tests\DuskTestCase;
use App\Domain\Users\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LanguageTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * @test
     * @group user
     * @group settings
     * @group language
     */
    public function an_authenticated_user_can_visit_the_language_page()
    {
        $user = create(User::class);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/')
                ->loginAs($user)
                ->visit('/backend/users/settings/language')
                ->assertPathIs('/backend/users/settings/language');
        });
    }

    /**
     * @test
     * @group user
     * @group settings
     * @group language
     */
    public function an_authenticated_user_can_update_his_profile_language()
    {
        $user = create(User::class);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/')
                ->loginAs($user)
                ->visit('/backend/users/settings/language')
                ->assertPathIs('/backend/users/settings/language')
                ->assertSee($user->name)
                ->select('#language', 'en')
                ->click('@update-language-button')
                ->assertSee('Language updated Successfully!');
        });
    }
}
