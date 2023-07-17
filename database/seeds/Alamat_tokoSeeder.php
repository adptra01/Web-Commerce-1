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
        $data = [
            'name_store' => 'Gery Petshop',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit purus aliquam non diam semper, elementum ullamcorper taciti in mattis leo habitant mauris nam lectus vehicula. Nascetur netus urna leo venenatis quis morbi sociis cursus, mus interdum viverra tellus curae fermentum malesuada erat rutrum, faucibus tortor nostra nam dictumst laoreet mi. Felis venenatis eu inceptos malesuada massa conubia aptent, facilisis ultrices libero per platea dapibus, nullam sociosqu luctus quis aliquam iaculis.',
            'telp' => '08978301766',
            'city_id' => 156,
            'detail' => 'Sumatera Selatan, Indonesia'
        ];


        Alamat_toko::insert($data);
    }
}