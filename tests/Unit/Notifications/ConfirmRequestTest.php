<?php

namespace Tests\Unit\Notifications;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ConfirmRequestTest extends TestCase
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
     * @group traits
     */
    public function confirm_request()
    {
        $this->assertTrue(true);
    }
}
