<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alamat;
use App\City;
use App\User;
use Faker\Generator as Faker;

$factory->define(Alamat::class, function (Faker $faker) {
    $user = User::all()->random();
    return [
        'user_id' => $user->id !== null ? $user->id : User::all()->random()->id,
        'cities_id' => City::all()->random()->id,
        'detail' => $faker->address(),
    ];

});
