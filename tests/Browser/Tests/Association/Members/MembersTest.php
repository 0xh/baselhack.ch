<?php

namespace Tests\Browser\Tests\Users\Association;

use Tests\DuskTestCase;
use Smart6ate\Roles\Models\Role;
use App\Domain\Users\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MembersTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * @test
     * @group association
     * @group dashboard
     */
    public function a_member_can_access_the_association_dashboard()
    {
        $user = create(User::class);

        $role = create(Role::class, [

            'title' => 'member',
        ]);

        $user->roles()->attach($role);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/')
                ->loginAs($user)
                ->visit('/backend/association')
                ->assertPathIs('/backend/association')
                ->assertSee('Members');
        });
    }

    /**
     * @test
     * @group association
     * @group members
     */
    public function a_member_can_access_the_members_page()
    {
        $user = create(User::class);

        $role = create(Role::class, [

            'title' => 'member',
        ]);

        $user->roles()->attach($role);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/')
                ->loginAs($user)
                ->visit('/backend/association/members')
                ->assertPathIs('/backend/association/members')
                ->assertSee('Export to .xls');
        });
    }
}
