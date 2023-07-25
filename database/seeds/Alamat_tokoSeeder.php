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
            'description' => 'Gery Pet Shop adalah toko hewan peliharaan yang menyediakan berbagai jenis hewan, makanan, peralatan, dan layanan kesehatan. Toko ini berlokasi di Jl. Sersan Derpin No.38 36139 Jambi, dan buka setiap hari dari pukul 08.00 sampai 20.00. Anda juga bisa membeli makanan berkualitas, peralatan lengkap, dan obat-obatan untuk hewan peliharaan Anda.',
            'telp' => '+6285265659186',
            'city_id' => 156,
            'detail' => 'Sumatera Selatan, Indonesia'
        ];


        Alamat_toko::insert($data);
    }
}
