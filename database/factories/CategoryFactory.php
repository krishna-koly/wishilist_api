<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'image' => $faker->imageUrl($width = 800, $height = 440),
        'status' => true
    ];
});
