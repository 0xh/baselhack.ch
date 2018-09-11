<?php

namespace Tests\Unit\Models;


use App\Domain\Models\Participant;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Collection;
use Tests\TestCase;

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
     * @group models
     * @group unit
     */
    public function create_a_participant()
    {
        $amount = 10;

        $participants = factory(Participant::class, $amount)->create();

        $this->assertInstanceOf(Collection::class, $participants);
        $this->assertInstanceOf(Participant::class, $participants->first());
        $this->assertEquals($amount, $participants->count());

    }


}
