<?php

namespace Tests\Unit\Auth;

use App\Domain\Models\User;
use Tests\TestCase;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
    }


    public function show_login_page()
    {
        $this->get(route('login'));

        $this->assertResponseStatus(200);
    }


    public function do_login_an_valid_user()
    {
        $user = create(User::class);

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'secret',
        ]);

        $this->assertRedirectedTo(route('backend.dashboard.index'));
    }


    public function do_not_log_in_an_invalid_user()
    {
        $user = create(User::class);

        $this->post(route('login'), [
            'email' => $user->email,
            'password' => 'invalid',
        ]);

        $this->assertSessionHasErrors();
        $this->assertResponseStatus(302);
        $this->assertRedirectedTo('/');
    }


    public function log_out_an_authenticated_user()
    {
        $user = create(User::class);
        $this->actingAs($user)->post('/logout');

        $this->assertResponseStatus(302);
        $this->assertRedirectedTo('/');
        $this->assertFalse(Auth::check());
    }


    public function track_last_authentication()
    {
        $user = create(User::class);

        $this->assertNull($user->last_authentication);

        Auth::login($user);

        $this->assertNotNull($user->last_authentication);
    }


    public function track_last_activity_after_login()
    {
        $user = create(User::class);
        $this->assertNull($user->last_authentication);

        Auth::login($user);

        $this->assertNotNull($user->last_authentication);
    }
}
