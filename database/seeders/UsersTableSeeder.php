<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('users')->insert([
            'name' => 'Demo_1_Admin',
            'email' => 'admin_village_visit@gmail.com',
            'password' => Hash::make('123456'),
            // 'email_verified_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            // 'deleted_at' => null,
        ]);

        // Create 60 regular users
        for ($i = 1; $i <= 60; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('123456'),
                // 'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                // 'deleted_at' => null,
            ]);
        }
    }
}
