<?php

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Domain\Models\Partner::create([
            'name' => 'Fuck Up Night',
            'url' => 'https://fuckupnights.com/basel/',
            'image' => 'swiss_made_software.png',
        ]);

        \App\Domain\Models\Partner::create([
            'name' => 'POWER.CODERS',
            'url' => 'https://powercoders.org/',
            'image' => 'powercoders.png',
        ]);

        \App\Domain\Models\Partner::create([
            'name' => 'Swiss Made Software',
            'url' => 'https://www.swissmadesoftware.org',
            'image' => 'fuck_up_nights.png',
        ]);
    }
}
