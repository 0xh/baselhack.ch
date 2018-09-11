<?php

namespace Tests\Feature\Participants;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ConfirmParticipationTest extends TestCase
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
     * @group feature
     * @group requests
     */
    public function confirm_participation()
    {
        $this->assertTrue(true);
    }
}
