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

$factory->define(\App\Domain\Models\Participant::class, function (Faker $faker) {
    return [
        'company' => $faker->company,
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->safeEmail,
        'confirmed_email' => $faker->boolean(),
        'over_eighteen' => $faker->boolean(),
        'accepted_policy' => $faker->dateTime(),
    ];
});
