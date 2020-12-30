<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Food;
use Faker\Generator as Faker;

$factory->define(Food::class, function (Faker $faker) {
    return [
        //
        'mid' => $faker->randomDigitNotNull,
        'name' => $faker->word,
        'nums' => $faker->words(2, true),
    ];
});
