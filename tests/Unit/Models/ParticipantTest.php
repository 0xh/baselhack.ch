<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Domain\Models\Participant;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ParticipantTest extends TestCase
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
    public function create_a_participant()
    {
        $amount = 10;

        $participants = factory(Participant::class, $amount)->create();

        $this->assertInstanceOf(Collection::class, $participants);
        $this->assertInstanceOf(Participant::class, $participants->first());
        $this->assertEquals($amount, $participants->count());
    }

    /** @test
     * @group unit
     * @group models
     */
    public function update_a_participant()
    {
        $fillables = ['uuid', 'firstname', 'lastname', 'company', 'email', 'confirmed_email', 'over_eighteen', 'accepted_policy'];

        $old = factory(Participant::class)->create();
        $new = factory(Participant::class)->make([
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
