<?php

namespace Tests\Unit\Models;

use App\Domain\Models\Partner;
use Tests\TestCase;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PartnerTest extends TestCase
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
    public function create_a_partner()
    {
        $amount = 10;

        $partners = factory(Partner::class, $amount)->create();

        $this->assertInstanceOf(Collection::class, $partners);
        $this->assertInstanceOf(Partner::class, $partners->first());
        $this->assertEquals($amount, $partners->count());
    }

    /** @test
     * @group unit
     * @group models
     */

    public function update_a_partner()
    {
        $fillables = [ 'uuid', 'name',  'image', 'url'];

        $old = factory(Partner::class)->create();
        $new = factory(Partner::class)->make([
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
