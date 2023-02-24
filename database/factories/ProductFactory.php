<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categories;
use App\Model;
use App\Product;
use Faker\Generator as Faker;


$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'description' => $faker->paragraph(),
        'image' => $faker->imageUrl(),
        'price' => $faker->numberBetween(10000, 999999),
        'weigth' => $faker->numberBetween(10, 100),
        'categories_id' => function() {
            return Categories::all()->random();
        },
        'stok' => $faker->numberBetween(0, 100)
        
    ];
});
