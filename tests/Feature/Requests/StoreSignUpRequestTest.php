<?php

namespace Tests\Feature\Requests;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class StoreSignUpRequestTest extends TestCase
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
    public function store_signup_request()
    {
        $this->assertTrue(true);
    }
}
