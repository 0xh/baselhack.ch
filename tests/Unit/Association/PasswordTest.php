<?php

namespace Tests\Unit\Association;

use App\Domain\Association\Models\Password;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PasswordTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
    }

    /** @test */
    public function create_a_password()
    {
        $password = create(Password::class);
        $this->assertInstanceOf(Password::class, $password);
    }

    /**
     * @test
     */
    public function delete_a_password()
    {
        $password = create(Password::class);

        $this->assertNull($password->deleted_at);

        $password->delete();

        $this->assertNotNull($password->deleted_at);
    }
}
