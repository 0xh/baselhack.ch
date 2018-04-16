<?php

use Faker\Generator as Faker;
use App\Domain\Users\Models\User;

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

$factory->define(User::class, function (Faker $faker) {
    return [

        'name' => $faker->name,
        'activated' => $faker->boolean(false),
        'email' => $faker->unique()->safeEmail,
        'redirect_email' => $faker->safeEmail,

        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),

        'mobile' => $faker->phoneNumber,
        'github' => $faker->userName,

        'birthday' => null,

        'language' => 'en',

        'member_status' => 'active',

        'member_since' => null,
        'last_authentication' => null,

    ];
});
