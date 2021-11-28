<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin1',
                'admin' => true,
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin1'),
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s'),
            ],
            [
                'name' => 'user1',
                'admin' => false,
                'email' => 'user1@user1.com',
                'password' => Hash::make('user1'),
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s'),
            ],
            [
                'name' => 'user2',
                'admin' => false,
                'email' => 'user2@user2.com',
                'password' => Hash::make('user2'),
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s'),
            ],
            [
                'name' => 'user3',
                'admin' => false,
                'email' => 'user3@user3.com',
                'password' => Hash::make('user3'),
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s'),
            ],
            [
                'name' => 'user4',
                'admin' => false,
                'email' => 'user4@user4.com',
                'password' => Hash::make('user4'),
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s'),
            ],
        ]);
    }
}
