<?php

namespace Tests\Feature\Requests;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class StoreEnquiryRequestTest extends TestCase
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
    public function store_enquiry()
    {
        $this->assertTrue(true);
    }
}
