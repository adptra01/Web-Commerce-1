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
                'name' => 'admin','email' => 'admin@example.com','password' => bcrypt('password'),'role' => 'admin'
            ],
            [
                'name' => 'user','email' => 'user@example.com','password' => bcrypt('password'),'role' => 'customer'

            ]
        ];
        User::insert($data);

        factory(App\User::class, 50)->create();    
    }
}
