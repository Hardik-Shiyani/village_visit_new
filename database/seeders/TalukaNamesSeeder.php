<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TalukaNamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $talukas = [
            ['name' => 'ગાંધીનગર'],
            ['name' => 'કલોલ'],
            ['name' => 'દહેગામ'],
            ['name' => 'માણસા'],
        ];

        foreach ($talukas as $taluka) {
            DB::table('taluka_names')->insert([
                'name' => $taluka['name'],
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
