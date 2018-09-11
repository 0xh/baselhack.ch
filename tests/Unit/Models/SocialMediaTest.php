<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Domain\Models\SocialMedia;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SocialMediaTest extends TestCase
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
    public function create_a_social_media()
    {
        $amount = 10;

        $social_medias = factory(SocialMedia::class, $amount)->create();

        $this->assertInstanceOf(Collection::class, $social_medias);
        $this->assertInstanceOf(SocialMedia::class, $social_medias->first());
        $this->assertEquals($amount, $social_medias->count());
    }

    /** @test
     * @group unit
     * @group models
     */
    public function update_a_social_media()
    {
        $fillables = ['uuid', 'name',  'icon', 'url'];

        $old = factory(SocialMedia::class)->create();
        $new = factory(SocialMedia::class)->make([
            'uuid' => 'random-uuid',
        ]);

        foreach ($fillables as $fillable) {
            $old->update([

                $fillable => $new->$fillable,
            ]);

            $this->assertEquals($old->$fillable, $new->$fillable);
        }

        $this->assertEquals($fillables, $old->getFillable());
    }
}
