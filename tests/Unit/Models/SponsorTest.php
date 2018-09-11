<?php

namespace Tests\Unit\Models;

use App\Domain\Models\Sponsor;
use Tests\TestCase;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SponsorTest extends TestCase
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
     * @group models
     */
    public function create_a_sponsor()
    {
        $amount = 10;

        $sponsors = factory(Sponsor::class, $amount)->create();

        $this->assertInstanceOf(Collection::class, $sponsors);
        $this->assertInstanceOf(Sponsor::class, $sponsors->first());
        $this->assertEquals($amount, $sponsors->count());
    }

    /** @test
     * @group unit
     * @group models
     */

    public function update_a_sponsor()
    {
        $fillables = ['uuid', 'name',  'image', 'url'];

        $old = factory(Sponsor::class)->create();
        $new = factory(Sponsor::class)->make([
            'uuid' => 'random-uuid'
        ]);

        foreach ($fillables as $fillable)
        {
            $old->update([

                $fillable => $new->$fillable
            ]);

            $this->assertEquals($old->$fillable, $new->$fillable);
        }

        $this->assertEquals($fillables, $old->getFillable());
    }
}
