<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Todo;
use Faker\Generator as Faker;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 5, $variableNbWords = true),
        'due_date' => $faker->date($format = 'Y-m-d', $max = '2025-12-01')
    ];
});
