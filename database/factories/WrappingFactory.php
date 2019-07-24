<?php

use Faker\Generator as Faker;

$factory->define(App\Wrapping::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'purchage_price' => rand(100,999),
        'tax' => rand(0,999),
        'discount' => rand(0,99),
        'description' => $faker->sentences(3, true),
        'offer_id' => random_int(1,20),
        'created_by' => rand(1,5),
        'updated_by' => rand(1,5),
        'type' => 1,
        'action' => true
    ];
});
