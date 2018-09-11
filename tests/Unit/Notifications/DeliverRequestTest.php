<?php

namespace Tests\Unit\Notifications;


use Tests\TestCase;

use Illuminate\Foundation\Testing\DatabaseMigrations;

class DeliverRequestTest extends TestCase
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
    public function deliver_request()
    {
        $this->assertTrue(true);
    }


}
