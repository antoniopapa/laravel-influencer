<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Order::class, function (Faker $faker) {
    $link = \App\Link::inRandomOrder()->first();

    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'created_at' => $faker->dateTime,
        'code' => $link->code,
        'user_id' => $link->user->id,
        'influencer_email' => $link->user->email,
        'complete' => 1,
    ];
});
