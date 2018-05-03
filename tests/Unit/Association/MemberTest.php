<?php

namespace Tests\Unit\Association;

use Tests\TestCase;
use App\Domain\Association\Models\Member;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MemberTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
    }

    /** @test */
    public function create_a_member()
    {
        $member = create(Member::class);
        $this->assertInstanceOf(Member::class, $member);
    }

    /**
     * @test
     */
    public function delete_an_member()
    {
        $member = create(Member::class);

        $this->assertNull($member->deleted_at);

        $member->delete();

        $this->assertNotNull($member->deleted_at);
    }
}
