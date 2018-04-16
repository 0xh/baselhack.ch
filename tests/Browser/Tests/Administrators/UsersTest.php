<?php

namespace Tests\Browser\Tests\Administrators;

use Tests\DuskTestCase;
use Smart6ate\Roles\Models\Role;
use App\Domain\Users\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UsersTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * @test
     * @group administrators
     * @group users
     */
    public function an_administrator_can_visit_the_users_index_page()
    {
        $user = create(User::class);

        $role = create(Role::class, [

            'title' => 'administrator',
        ]);

        $user->roles()->attach($role);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/')
                ->loginAs($user)
                ->visit('/backend/administrators/users')
                ->assertPathIs('/backend/administrators/users')
                ->assertSee('Users');

        });
    }


    /**
     * @test
     * @group administrators
     * @group users
     */
    public function an_administrator_can_visit_the_archived_users_index_page()
    {
        $user = create(User::class);

        $role = create(Role::class, [

            'title' => 'administrator',
        ]);

        $user->roles()->attach($role);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/')
                ->loginAs($user)
                ->visit('/backend/administrators/users/archived')
                ->assertPathIs('/backend/administrators/users/archived')
                ->assertSee('Archived users');

        });
    }

    /**
     * @test
     * @group administrators
     * @group users
     */
    public function an_user_can_not_visit_the_users_index_page()
    {
        $user = create(User::class);

        $this->browse(function ($browser) use ($user) {
            $browser->loginAs($user)
                ->visit('/backend/administrators/users')
                ->assertPathIs('/backend/users/dashboard');
        });
    }
}
