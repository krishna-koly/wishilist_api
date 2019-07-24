<?php

use Faker\Generator as Faker;

$factory->define(App\Offer::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->word,
        'value' => random_int(10,99),
        'image' => $faker->imageUrl($width = 800, $height = 440),
        'action' => true
    ];
});
