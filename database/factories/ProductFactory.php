<?php


use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->word,
        'purchage_price' => rand(100,999),
        'tax' => rand(0,999),
        'discount' => rand(0,99),
        'description' => $faker->sentences(3, true),
        'sub_category_id' => rand(1,20),
        'brand_id' => rand(1,20),
        'offer_id' => random_int(1,20),
        'created_by' => rand(1,5),
        'updated_by' => rand(1,5),
        'type' => 1,
        'status' => true,
        'action' => true
    ];
});
