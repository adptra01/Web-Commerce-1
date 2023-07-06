<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Order;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
       'order_id' => function ()
       {
        return Order::all()->random();
       },
       'product_id' => function ()
       {
        return Product::all()->random();
       },
       'qty' => rand(1, 4)
    ];
});
