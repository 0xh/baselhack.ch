<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\Domain\Models\Partner::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'image' => $faker->imageUrl(),
        'url' => $faker->url,
        'order' => null,
    ];
});
