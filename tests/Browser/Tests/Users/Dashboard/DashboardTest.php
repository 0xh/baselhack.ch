<?php

namespace Tests\Browser\Tests\Users\Dashboard;

use Smart6ate\Roles\Models\Role;
use Tests\DuskTestCase;
use App\Domain\Users\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DashboardTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * @test
     * @group user
     * @group dashboard
     */
    public function an_authenticated_user_can_visit_the_dashboard()
    {
        $user = create(User::class);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/')
                ->loginAs($user)
                ->visit('/backend/users/dashboard')
                ->assertPathIs('/backend/users/dashboard');
        });
    }


    /**
     * @test
     * @group user
     * @group dashboard
     */
    public function an_user_can_see()
    {
        $user = create(User::class);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/')
                ->loginAs($user)
                ->visit('/backend/users/dashboard')
                ->assertSee('Settings')
                ->click('#link-to-settings')
                ->assertPathIs('/backend/users/settings/profile')
                ->visit('/backend/users/dashboard')
                ->assertSee('Logout')
                ->assertDontSee('BaselHack')
                ->assertDontSee('Administrator');
        });
    }




    /**
     * @test
     * @group user
     * @group dashboard
     */
    public function a_member_can_see()
    {
        $user = create(User::class);

        $role = create(Role::class, [

            'title' => 'member',
        ]);

        $user->roles()->attach($role);


        $this->browse(function ($browser) use ($user) {
            $browser->visit('/')
                ->loginAs($user)
                ->visit('/backend/users/dashboard')
                ->assertSee('Settings')
                ->assertSee('Logout')
                ->assertSee('BaselHack')
                ->click('#link-to-association')
                ->assertPathIs('/backend/association');
        });
    }


    /**
     * @test
     * @group user
     * @group dashboard
     */
    public function an_administrator_can_see()
    {
        $user = create(User::class);

        $role = create(Role::class, [

            'title' => 'administrator',
        ]);

        $user->roles()->attach($role);


        $this->browse(function ($browser) use ($user) {
            $browser->visit('/')
                ->loginAs($user)
                ->visit('/backend/users/dashboard')
                ->assertSee('Settings')
                ->assertSee('Logout')
                ->assertSee('Administrator')
                ->click('#link-to-administrator')
                ->assertPathIs('/backend/administrators/users');
        });
    }

}
