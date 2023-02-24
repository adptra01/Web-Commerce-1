<?php

use App\Categories;
use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'isanAdmin','email' => 'isan@admin.com','password' => bcrypt('password'),'role' => 'admin'
            ],
            [
                'name' => 'isanUser','email' => 'isan@User.com','password' => bcrypt('password'),'role' => 'customer'

            ]
        ];
        User::insert($data);

        factory(App\User::class, 50)->create();    
    }
}
