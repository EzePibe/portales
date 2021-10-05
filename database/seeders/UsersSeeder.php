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
                'name' => 'Admin1',
                'email' => 'ezequiel.guardia@davinci.edu.ar',
                'password' => Hash::make('admin1'),
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s'),
            ],
        ]);
    }
}
