<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categories;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'description' => $faker->paragraph(),
        'image' => $faker->imageUrl(),
        'price' => $faker->numberBetween(10000, 999999),
        'weight' => $faker->numberBetween(0, 100),
        'categories_id' => function() {
            return Categories::all()->random();
        },
        
    ];
});
