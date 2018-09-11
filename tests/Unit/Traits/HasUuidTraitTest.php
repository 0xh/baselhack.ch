<?php

namespace Tests\Unit\Traits;

use App\Domain\Models\User;
use Tests\TestCase;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class HasUuidTraitTest extends TestCase
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
    public function has_uuid()
    {
        $this->assertTrue(true);
    }


}
