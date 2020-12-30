<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Menu;
use Faker\Generator as Faker;

$factory->define(Menu::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->words(mt_rand(1, 4), true),//返回1-4单词，false表示返回一个数组；true表示返回一个字符串，单词之间用空格分开

        'synopsis' => $faker->sentence(5, true),//返回一个句子，false表示只能含有5个单词，true表示可以在5个单词左右

        'uid' => function(){
        return factory(\App\User::class)->create()->id;
        },

        'cid' => function(){
        return factory(\App\Category::class)->create()->id;
        },

//        'sid' => function(){
//            return factory(\App\Step::class)->create()->id;
//        },

//        'fid' => function(){
//            return factory(\App\Food::class)->create()->id;
//        },

        'lid' => function(){
            return factory(\App\Level::class)->create()->id;
        },
    ];
});
