<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Link::class, function (Faker $faker) {
    return [
        'code' => \Illuminate\Support\Str::random(6),
        'user_id' => \App\User::inRandomOrder()->first()->id,
    ];
});
