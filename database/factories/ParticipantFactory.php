<?php

use Faker\Generator as Faker;
use App\Domain\Event\Models\Participant;

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

$factory->define(Participant::class, function (Faker $faker) {
    return [

        'status' => 'inactive',
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->safeEmail,
        'mobile' => $faker->phoneNumber,
        'github' => $faker->colorName,
        'birthdate' => $faker->date(),
        'member_since' => $faker->date(),

    ];
});
