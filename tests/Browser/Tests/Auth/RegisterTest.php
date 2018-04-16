<?php

namespace Tests\Browser\Tests\Auth;

use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * @test
     * @group auth
     */
    public function a_user_can_not_register()
    {
        $this->browse(function ($browser) {
            $browser->visit('/')
            ->visit('/register')
            ->assertPathIs('/login');
        });
    }

    /*
        public function register()
        {
            $this->browse(function ($browser) {
                $browser->visit('/')
                    ->clickLink('Register')
                    ->assertPathIs('/login')
                    ->value('#name', 'Max Mustermann')
                    ->value('#email', 'max.mustermann@smartgate.ch')
                    ->value('#password', 'smarthome')
                    ->value('#password-confirm', 'smarthome')
                    ->click('button[type="submit"]')
                    ->assertPathIs('/home')
                    ->assertSee("Max Mustermann");
            });
        }*/
}
