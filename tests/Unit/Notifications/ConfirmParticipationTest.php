<?php

namespace Tests\Unit\Notifications;

use Tests\TestCase;
use App\Domain\Models\Participant;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Notification;
use App\Domain\Notifications\ConfirmParticipation;
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
    public function confirm_participation_notification()
    {
        $this->assertTrue(true);
    }

}
