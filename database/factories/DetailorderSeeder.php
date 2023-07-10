<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Detailorder;
use App\Order;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Detailorder::class, function (Faker $faker) {
$order = Order::all()->random();
    $product = Product::all()->random();
    return [
        'order_id' => $order->id !== null ? $order->id : Order::all()->random()->id,
        'product_id' => $product->id !== null ? $product->id : Product::all()->random()->id,
        'qty' => rand(1, 10),
    ];
});
