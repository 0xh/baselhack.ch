<?php

namespace Tests\Browser\Tests\Users\Settings;

use Tests\DuskTestCase;
use App\Domain\Users\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SecurityTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * @test
     * @group user
     * @group settings
     * @group security
     */
    public function an_authenticated_user_can_visit_the_security_page()
    {
        $user = create(User::class);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/')
                ->loginAs($user)
                ->visit('/backend/users/settings/security')
                ->assertPathIs('/backend/users/settings/security');
        });
    }

    /**
     * @test
     * @group user
     * @group settings
     * @group security
     */
    public function an_authenticated_user_can_update_his_password()
    {
        $user = create(User::class);

        $password = 'smarthome2018';

        $this->browse(function ($browser) use ($user, $password) {
            $browser->visit('/')
                ->loginAs($user)
                ->visit('/backend/users/settings/security')
                ->assertPathIs('/backend/users/settings/security')
                ->assertSee($user->name)
                ->type('#password', $password)
                ->type('#password_confirmation', $password)
                ->click('@update-password-button')
                ->assertSee('Password updated Successfully!')
                ->click('@logout')
                ->assertSee('Log-Out Successfully!')
                ->clickLink('Member Area')
                ->type('#email', $user->email)
                ->type('#password', $password)
                ->click('@login-button')
                ->assertSee('Log-In Successfully!');
        });
    }
}
