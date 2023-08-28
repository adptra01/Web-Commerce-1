<?php

use App\Categories;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Categories::class, 10)->create();
        $categories = [
            [
                'name' => 'Celana',
            ],
            [
                'name' => 'Jaket',
            ],
            [
                'name' => 'Ikat Pinggang',
            ],
            [
                'name' => 'Kaos',
            ],
            [
                'name' => 'Tas',
            ],
            [
                'name' => 'Topi',
            ],
            // Tambahkan kategori lainnya
        ];

        foreach ($categories as $category) {
            Categories::create($category);
        }

    }
}
