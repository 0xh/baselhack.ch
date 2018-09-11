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

$factory->define(\App\Domain\Models\User::class, function (Faker $faker) {
    return [

        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'language' => $faker->randomElement(config('baselhack.languages')),
    ];
});

$factory->state(\App\Domain\Models\User::class, 'roles', function ($faker) {
    return [
        'roles' => null,
    ];
});

$factory->state(\App\Domain\Models\User::class, 'notifications', function ($faker) {
    return [
        'notifications' => $faker->randomElement(config('baselhack.enquiry.types')),
    ];
});

$factory->state(\App\Domain\Models\User::class, 'last_authenticated', function ($faker) {
    return [
        'last_authenticated' => \Carbon\Carbon::now(),
    ];
});

$factory->state(\App\Domain\Models\User::class, 'published', function ($faker) {
    return [
        'published_at' => \Carbon\Carbon::now(),
    ];
});
