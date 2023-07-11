<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categories;
use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Storage;

$factory->define(Product::class, function (Faker $faker) {
    $imagePath = 'public/imageproducts/contoh_baju.jpg';
    Storage::put($imagePath, file_get_contents(public_path('contoh_baju.jpg')));

    return [
        'name' => $faker->sentence(3),
        'description' => $faker->paragraph(),
        'image' => $imagePath,
        'price' => $faker->numberBetween(10000, 999999),
        'weigth' => $faker->numberBetween(10, 100),
        'categories_id' => function() {
            return Categories::all()->random();
        },
        'stok' => $faker->numberBetween(0, 100)

    ];
});
