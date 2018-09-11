<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Domain\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {
        parent::tearDown();
    }

    /** @test
     * @group unit
     * @group models
     */
    public function create_a_user()
    {
        $amount = 10;

        $users = factory(User::class, $amount)->create();

        $this->assertInstanceOf(Collection::class, $users);
        $this->assertInstanceOf(User::class, $users->first());
        $this->assertEquals($amount, $users->count());
    }

    /** @test
     * @group unit
     * @group models
     */
    public function update_a_user()
    {
        $fillables = ['uuid', 'name', 'email', 'password', 'published_at', 'last_authenticated'];

        $old = factory(User::class)->states('notifications', 'published', 'last_authenticated')->create();
        $new = factory(User::class)->states('notifications', 'published', 'last_authenticated')->make([
            'uuid' => 'random-uuid',
        ]);

        foreach ($fillables as $fillable) {
            $old->update([

                $fillable => $new->$fillable,
            ]);

            $this->assertEquals($old->$fillable, $new->$fillable);
        }

        $this->assertEquals($fillables, $old->getFillable());
    }
}
