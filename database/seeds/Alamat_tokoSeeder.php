<?php

use App\Alamat_toko;
use Illuminate\Database\Seeder;

class Alamat_tokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['city_id' => 156, 'detail' => 'Sumatera Selatan, Indonesia'];


        Alamat_toko::insert($data);
    }
}
