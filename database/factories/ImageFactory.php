<?php

use Faker\Generator as Faker;

$factory->define(App\Image::class, function (Faker $faker) {
    $imageable = ['product', 'wrapping'];
    return [
        'url' => $faker->imageUrl($width = 800, $height = 800),
        'imageable_id' => random_int(1,50),
        'imageable_type' => $imageable[random_int(0,1)],
        'action' => true
    ];
});
