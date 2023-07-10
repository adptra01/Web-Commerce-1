<?php

use Illuminate\Database\Seeder;
use App\User;
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
                'name' => 'AdminCenter','email' => 'admin@admin.com','password' => bcrypt('admin'),'role' => 'admin'
            ],
            [
                'name' => 'testing','email' => 'testing@testing.com','password' => bcrypt('testing'),'role' => 'admin'
            ],
            [
                'name' => 'user','email' => 'user@example.com','password' => bcrypt('password'),'role' => 'customer'
            ]
        ];
        User::insert($data);

        factory(App\User::class, 50)->create();
    }
}
