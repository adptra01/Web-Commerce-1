<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categories;
use App\Product;
use Faker\Generator as Faker;
use Illuminate\Http\UploadedFile;

$factory->define(Product::class, function (Faker $faker) {
    $image = UploadedFile::fake()->image('product.jpg');
    $imagePath = $image->store('public/imageproducts');
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
