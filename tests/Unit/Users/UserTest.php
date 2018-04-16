<?php

namespace Tests\Unit\Users;

use Tests\TestCase;
use App\Domain\Users\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
    }

    /** @test */
    public function create_a_user()
    {
        $user = create(User::class);
        $this->assertInstanceOf(User::class, $user);
    }

    /**
     * @test
     */
    public function delete_an_user()
    {
        $user = create(User::class);

        $this->assertNull($user->deleted_at);

        $user->delete();

        $this->assertNotNull($user->deleted_at);
    }

    /**
     * @test
     */
    public function get_link_to_users__gitHub_account()
    {
        $user = create(User::class);

        $this->assertNotNull($user->git_hub_link);
    }

    /**
     * @test
     */
    public function get_basel_hack_email()
    {
        $user = create(User::class);

        $this->assertNotNull($user->basel_hack_email);
    }
}
