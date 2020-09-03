<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\LocalStack;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(LocalStack::class, function (Faker $faker) {
    return [
        'status_code' => $faker->numerify('###'),
        'error_message' => $faker->lexify('Error ???'),
    ];
});
