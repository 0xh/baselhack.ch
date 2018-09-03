<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Domain\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ResetsPasswordTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
    }

    public function show_reset_password_request_page()
    {
        $this->get(route('password.request'));
        $this->assertResponseStatus(200);
    }

    public function send_reset_password_email()
    {
        $user = factory(User::class)->create();

        $this->expectsNotification($user, ResetPassword::class);

        $this->post('password/email', ['email' => $user->email]);

        $this->assertResponseStatus(302);
    }

    public function not_send_a_reset_password_email_to_an_invalid_user()
    {
        $this->doesntExpectJobs(ResetPassword::class);

        $this->post('password/email', ['email' => 'invalid@email.com']);
    }

    public function show_reset_password_page()
    {
        $this->get('/password/reset/token');

        $this->assertResponseStatus(200);
    }

    public function reset_an_users_password()
    {
        $user = factory(User::class)->create();

        $token = Password::createToken($user);

        $this->post('/password/reset', [
            'token' => $token,
            'email' => $user->email,
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertTrue(Hash::check('password', $user->fresh()->password));
    }
}
