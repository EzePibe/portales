<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [
                'title' => 'Saraza de la buena',
                'text' => 'saraza saraza saraza saraza saraza saraza saraza saraza saraza saraza saraza saraza saraza saraza ',
                'date' => date('Y-m-d H-i-s'),
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s'),
            ],
            [
                'title' => 'Saraza de la buena 2',
                'text' => 'saraza 2 | saraza 2 | saraza 2 | saraza 2 | saraza 2 | saraza 2 | saraza 2',
                'date' => date('Y-m-d H-i-s'),
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s'),
            ],
        ]);
    }
}
