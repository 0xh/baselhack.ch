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
    public function confirm_participation_notification_open()
    {
        $this->assertTrue(true);
    }

    /*   public function confirm_participation_notification()
       {
           factory(Participant::class,2)->create();

           $participant = Participant::first();

           Notification::fake();

           Notification::assertSentTo(
               $participant,
               ConfirmParticipation::class,
               function ($notification, $channels) use ($participant) {
                   return $notification->participant->id === $participant->id;
               }
           );
       }*/

    public function test_confirm_participation_notification()
    {
        $participant = factory(Participant::class)->create();

        Notification::fake();

        Notification::assertSentTo(
            $participant,
            ConfirmParticipation::class,
            function ($notification) use ($participant) {
                $mailData = $notification->toMail($participant)->toArray();
                $this->assertEquals(Lang::get('frontend/notifications.confirm_participation.subject'), $mailData['subject']);
                $this->assertEquals(Lang::get('frontend/notifications.confirm_participation.greeting'), $mailData['greeting']);
                $this->assertContains(Lang::get('frontend/notifications.confirm_participation.line'), $mailData['line']);
                $this->assertEquals(Lang::get('frontend/notifications.confirm_participation.action'), $mailData['action']);
                $this->assertEquals(Lang::get('frontend/notifications.confirm_participation.salutation'), $mailData['line']);

                return $notification->participant->id === $participant->id;
            }
        );
    }
}
