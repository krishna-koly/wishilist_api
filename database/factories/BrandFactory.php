<?php

use Faker\Generator as Faker;

$factory->define(App\Brand::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'description' => $faker->sentences(3, true),
        'logo' => $faker->imageUrl($width = 200, $height = 150),
        'banner' => $faker->imageUrl($width = 800, $height = 440),
        'status' => true
    ];
});
