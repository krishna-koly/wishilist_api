<?php

use Faker\Generator as Faker;

$factory->define(App\Review::class, function (Faker $faker) {
    return [
        'body' => $faker->sentences(3, true),
        'star' => rand(2,5),
        'user_id' => rand(1,5),
        'product_id' => rand(1,50),
        'action' => true
    ];
});
