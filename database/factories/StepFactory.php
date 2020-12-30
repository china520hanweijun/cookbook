<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Step;
use Faker\Generator as Faker;

$factory->define(Step::class, function (Faker $faker) {
    return [
        //
        'mid' => $faker->randomDigitNotNull,
        'step_order' => $faker->randomDigitNotNull,
        'detail' => $faker->paragraph(3, true),
    ];
});
