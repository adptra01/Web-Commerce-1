<?php

use Illuminate\Database\Seeder;
use App\Rekening;
class RekeningTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['bank_name' => 'Sea Bank','atas_nama'=>'BZL Kids Store','no_rekening'=>'12310823']
        ];
        Rekening::insert($data);
    }
}
