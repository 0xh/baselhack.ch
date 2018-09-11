<?php

use Illuminate\Database\Seeder;

class SponsorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Domain\Models\Sponsor::create([
            'name' => 'Basel Area Swiss',
            'url' => 'https://www.baselarea.swiss/baselarea-swiss.html',
            'image' => 'basel_area_swiss.png',
        ]);

        \App\Domain\Models\Sponsor::create([
            'name' => 'Kanton Basel-Landschaft',
            'url' => 'https://www.baselland.ch',
            'image' => 'kanton_bl.png',
        ]);

        \App\Domain\Models\Sponsor::create([
            'name' => 'Smart Regio Basel',
            'url' => 'https://smartregiobasel.ch/',
            'image' => 'smart_regio_basel.png',
        ]);

        \App\Domain\Models\Sponsor::create([
            'name' => 'Actemium',
            'url' => 'https://www.actemium.ch',
            'image' => 'actemium.png',
        ]);

        \App\Domain\Models\Sponsor::create([
            'name' => 'Basler Versicherungen',
            'url' => 'https://www.baloise.ch/',
            'image' => 'basler_versicherungen.png',
        ]);

        \App\Domain\Models\Sponsor::create([
            'name' => 'Bluesky IT-Solutions',
            'url' => 'https://www.bluesky-it.ch',
            'image' => 'bluesky_it_solutions.png',
        ]);

    }
}
