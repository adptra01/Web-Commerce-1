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
                'name' => 'Makanan',
            ],
            [
                'name' => 'Perawatan',
            ],
            [
                'name' => 'Aksesoris',
            ],
            // Tambahkan kategori lainnya
        ];

        foreach ($categories as $category) {
            Categories::create($category);
        }

    }
}
