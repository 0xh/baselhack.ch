<?php

use Faker\Generator as Faker;
use App\Domain\Association\Models\Password;

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

$factory->define(Password::class, function (Faker $faker) {
    return [
        'service' => $faker->name,
        'email' => $faker->safeEmail,
        'username' => $faker->userName,
        'password' => md5($faker->colorName),
        'description' => $faker->text(200),
    ];
});
