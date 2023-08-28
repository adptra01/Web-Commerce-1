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
            'name_store' => 'Distro BZL Kids',
            'description' => 'Distro B.Z.L kids adalah toko online yang menyediakan berbagai macam pakaian anak-anak yang trendy dan stylish. Toko ini menawarkan produk-produk berkualitas dengan harga terjangkau, mulai dari kaos, kemeja, jaket, celana, rok, hingga aksesoris. Anda dapat memilih pakaian yang sesuai dengan selera dan ukuran anak Anda, serta mendapatkan layanan pengiriman yang cepat dan aman.',
            'telp' => '+628978111111',
            'city_id' => 156,
            'detail' => 'Sumatera Selatan, Indonesia'
        ];


        Alamat_toko::insert($data);
    }
}
