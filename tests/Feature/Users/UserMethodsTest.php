<?php

namespace Tests\Unit\Users;

use Tests\TestCase;
use App\Domain\Users\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserMethodsTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
    }

    /** @test */
    public function a_user_has_an_avatar()
    {
        $user = create(User::class);
        $this->assertNotNull($user->getAvatar());
    }
}
