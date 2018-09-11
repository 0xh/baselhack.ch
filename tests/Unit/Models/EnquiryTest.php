<?php

namespace Tests\Unit\Models;

use App\Domain\Models\Enquiry;
use Tests\TestCase;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EnquiryTest extends TestCase
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
    public function create_a_enquiry()
    {
        $amount = 10;

        $enquiries = factory(Enquiry::class, $amount)->create();

        $this->assertInstanceOf(Collection::class, $enquiries);
        $this->assertInstanceOf(Enquiry::class, $enquiries->first());
        $this->assertEquals($amount, $enquiries->count());
    }

    /** @test
     * @group unit
     * @group models
     */

    public function update_a_enquiry()
    {
        $fillables = ['uuid', 'type', 'company', 'name', 'email', 'message'];

        $old = factory(Enquiry::class)->create();
        $new = factory(Enquiry::class)->make([
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
