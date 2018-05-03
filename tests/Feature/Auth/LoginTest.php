<?php

namespace Tests\Unit\Auth;

use Tests\TestCase;
use App\Domain\Users\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @test
     * @group auth
     */
    public function show_login_page()
    {
        $this->get(route('login'));

        $this->assertResponseStatus(200);
    }

    /**
     * @test
     * @group auth
     */
    public function do_login_an_valid_user()
    {
        $user = create(User::class);

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'secret',
        ]);

        $this->assertRedirectedTo(route('backend.users.dashboard.index'));
    }

    /**
     * @test
     * @group auth
     */
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

    /**
     * @test
     * @group auth
     */
    public function log_out_an_authenticated_user()
    {
        $user = create(User::class);
        $this->actingAs($user)->post('/logout');

        $this->assertResponseStatus(302);
        $this->assertRedirectedTo('/');
        $this->assertFalse(Auth::check());
    }

    /**
     * @test
     * @group auth
     */
    public function track_last_authentication()
    {
        $user = create(User::class);

        $this->assertNull($user->last_authentication);

        Auth::login($user);

        $this->assertNotNull($user->last_authentication);
    }

    /**
     * @test
     */
    public function track_last_activity_after_login()
    {
        $user = create(User::class);
        $this->assertNull($user->last_authentication);

        Auth::login($user);

        $this->assertNotNull($user->last_authentication);
    }
}
