<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\OrderItem::class, function (Faker $faker) {
    $price = $faker->numberBetween(10, 100);

    return [
        'product_title' => $faker->text(30),
        'price' => $price,
        'quantity' => $faker->numberBetween(1, 5),
        'influencer_revenue' => 0.1 * $price,
        'admin_revenue' => 0.9 * $price,
    ];
});
