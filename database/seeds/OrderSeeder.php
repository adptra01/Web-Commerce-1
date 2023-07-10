<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Order::class, 20)->create();
        factory(App\Alamat::class, 50)->create();
        // factory(App\Detailorder::class, 50)->create();
    }
}
