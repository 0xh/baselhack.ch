<?php

namespace Tests\Browser\Tests\Auth;

use Tests\DuskTestCase;
use App\Domain\Users\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * @test
     * @group auth
     */
    public function a_user_can_login()
    {
        $password = 'baselhack';

        $user = create(User::class, [

            'name' => 'Max Mustermann',
            'email' => 'max.mustermann@onicial.ch',
            'password' => bcrypt($password),

        ]);

        $this->browse(function ($browser) use ($user, $password) {
            $browser->visit('/')
                ->click('@login')
            ->assertPathIs('/login')
                ->value('#email', $user->email)
                ->value('#password', $password)
                ->click('button[type="submit"]')
                ->assertPathIs('/backend/users/dashboard')
                ->assertSee($user->name);
        });
    }
}
