<?php

use Faker\Generator as Faker;

$factory->define(App\SubCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'image' => $faker->imageUrl($width = 800, $height = 400),
        'category_id' => rand(1,20),
        'status' => true
    ];
});
