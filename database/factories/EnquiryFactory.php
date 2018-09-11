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

$factory->define(\App\Domain\Models\Enquiry::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement(config('baselhack.enquiry.type')),
        'company' => $faker->company,
        'name' => $faker->firstName.' '.$faker->lastName,
        'email' => $faker->safeEmail,
        'message' => $faker->text(200),
    ];
});
