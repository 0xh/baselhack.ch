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
     */
    public function track_last_activity_after_login()
    {
        $user = create(User::class);
        $this->assertNull($user->last_authentication);

        Auth::login($user);

        $this->assertNotNull($user->last_authentication);
    }
}
