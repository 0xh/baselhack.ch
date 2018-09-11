<?php

use Illuminate\Database\Seeder;

class SocialMediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Domain\Models\SocialMedia::create([
            'name' => 'instagram',
            'url' => 'https://www.instagram.com/explore/tags/baselhack/',
            'icon' => 'fab fa-instagram',
        ]);

        \App\Domain\Models\SocialMedia::create([
            'name' => 'facebook',
            'url' => 'https://www.facebook.com/BaselHackathon',
            'icon' => 'fab fa-facebook-f',
        ]);

        \App\Domain\Models\SocialMedia::create([
            'name' => 'linkedin',
            'url' => 'https://www.linkedin.com/groups/8615464',
            'icon' => 'fab fa-linkedin-in',
        ]);

        \App\Domain\Models\SocialMedia::create([
            'name' => 'twitter',
            'url' => 'https://twitter.com/BaselHack',
            'icon' => 'fab fa-twitter',
        ]);

        \App\Domain\Models\SocialMedia::create([
            'name' => 'youtube',
            'url' => 'https://www.instagram.com/explore/tags/baselhack/\'',
            'icon' => 'fab fa-youtube',
        ]);

        \App\Domain\Models\SocialMedia::create([
            'name' => 'github',
            'url' => 'https://github.com/BaselHack',
            'icon' => 'fab fa-github',
        ]);
    }
}
