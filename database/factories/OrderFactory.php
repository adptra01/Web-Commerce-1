<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Detailorder;
use App\User;
use App\Order;
use App\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    $statusOrder = rand(1, 6);
    $noResi = in_array($statusOrder, [4, 5, 6]) ? Str::random() : null;
    $buktiPembayaran = in_array($statusOrder, [2, 3, 4, 5, 6]) ? 'public/imageproducts/bukti_pembayaran.jpg' : null;

    return [
        'invoice' => 'ALV' . date('Ymdhi'),
        'user_id' => User::all()->random()->id,
        'subtotal' => 0, // Inisialisasi subtotal dengan 0
        'no_resi' => $noResi,
        'status_order_id' => $statusOrder,
        'metode_pembayaran' => $faker->randomElement(['trf', 'cod']),
        'ongkir' => $faker->numberBetween(10000, 999999),
        'bukti_pembayaran' => $buktiPembayaran,
        'no_hp' => $faker->phoneNumber(),
        'pesan' => $faker->paragraph(),
    ];
});

$factory->afterCreating(Order::class, function ($order, Faker $faker) {
    $detailOrders = factory(Detailorder::class, rand(1, 5))->create(['order_id' => $order->id]);

    $subtotal = $detailOrders->sum(function ($detailOrder) {
        $product = Product::find($detailOrder->product_id);
        return $product ? $product->price * $detailOrder->qty : 0;
    });

    $order->subtotal = $subtotal;
    $order->save();
});

$factory->define(Detailorder::class, function (Faker $faker) {
    return [
        'product_id' => Product::all()->random()->id,
        'qty' => rand(1, 10),
    ];
});
