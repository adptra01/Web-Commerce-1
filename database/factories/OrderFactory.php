<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Model;
use App\Order;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

// $table->id();
// $table->string('invoice');
// $table->unsignedBigInteger('user_id');
// $table->integer('subtotal');
// $table->string('no_resi')->nullable();
// $table->unsignedBigInteger('status_order_id');
// $table->string('metode_pembayaran');
// $table->integer('ongkir');
// $table->timestamps();

$factory->define(Order::class, function (Faker $faker) {
    return [
        'invoice' => 'ALV' . Date('Ymdhi'),
        'user_id' => function() {
            return User::all()->random();
        },
        'subtotal' => $faker->numberBetween(10000, 999999),
        'no_resi' => Str::random(),
        'status_order_id' => rand(1,6),
        'metode_pembayaran' => $this->faker->randomElement(['trf', 'cod']),
        'ongkir' => $faker->numberBetween(10000, 999999),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});
