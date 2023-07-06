<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Model;
use App\Order;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Http\UploadedFile as HttpUploadedFile;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'invoice' => 'ALV' . Date('Ymdhi'),
        'user_id' => function() {
            return User::all()->random();
        },
        'subtotal' => $faker->numberBetween(10000, 999999),
        'no_resi' => function (array $order) {
            if (in_array($order['status_order_id'], [3, 4, 5, 6])) {
                Str::random();
            }
            return null;
        },
        'status_order_id' => rand(1,6),
        'metode_pembayaran' => $this->faker->randomElement(['trf', 'cod']),
        'ongkir' => $faker->numberBetween(10000, 999999),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
        'bukti_pembayaran' => function (array $order) {
            if (in_array($order['status_order_id'], [3, 4, 5, 6])) {
                $image = HttpUploadedFile::fake()->image('product.jpg');
                $imagePath = $image->store('public/imageproducts');
                return $imagePath;
            }
            return null;
        },
    ];
});
