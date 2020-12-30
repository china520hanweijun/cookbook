<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Level;
use Faker\Generator as Faker;

$factory->define(Level::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->randomElement(['有手就行', '哎呀', '呕吼', '我丢', '干您', '这啥']),
    ];
});
