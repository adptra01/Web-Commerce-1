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
            'name_store' => 'Example Store',
            'description' => 'A brief description of what this project does and who it',
            'telp' => '08978301766',
            'city_id' => 156, 
            'detail' => 'Sumatera Selatan, Indonesia'
        ];


        Alamat_toko::insert($data);
    }
}
