<?php

namespace Tests\Browser\Tests\Users\Settings;

use Tests\DuskTestCase;
use App\Domain\Users\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProfileTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * @test
     * @group user
     * @group Settings
     */
    public function an_authenticated_user_can_visit_the_profile_page()
    {
        $user = create(User::class);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/')
                ->loginAs($user)
                ->visit('/backend/users/settings/profile')
                ->assertPathIs('/backend/users/settings/profile');
        });
    }

    /**
     * @test
     * @group user
     * @group settings
     * @group profile
     */
    public function an_authenticated_user_can_update_his_username()
    {
        $user = create(User::class);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/')
                ->loginAs($user)
                ->visit('/backend/users/settings/profile')
                ->assertPathIs('/backend/users/settings/profile')
                ->assertSee($user->name)
                ->clear('#name')
                ->type('#name', 'Max Mustermann')
                ->click('@update-profile-button')
                ->assertValue('#name', 'Max Mustermann')
                ->assertSee('Profile updated Successfully!');
        });
    }

    /**
     * @test
     * @group user
     * @group settings
     * @group profile
     */
    public function an_authenticated_user_can_update_his_email()
    {
        $user = create(User::class);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/')
                ->loginAs($user)
                ->visit('/backend/users/settings/profile')
                ->assertPathIs('/backend/users/settings/profile')
                ->assertSee($user->name)
                ->clear('#redirect_email')
                ->type('#redirect_email', 'max.mustermann@smartgate.ch')
                ->click('@update-profile-button')
                ->assertValue('#redirect_email', 'max.mustermann@smartgate.ch')
                ->assertSee('Profile updated Successfully!');
        });
    }
}
