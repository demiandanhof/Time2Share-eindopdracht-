<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Démian',
            'email' => 'demian@gmail.nl',
            'password' => bcrypt('1971'),
            'profile_picture' => '/img/profile_pictures/demian.jpg',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'name' => 'Lisa',
            'email' => 'Lisa@gmail.nl',
            'password' => bcrypt('1971'),
            'profile_picture' => '/img/profile_pictures/lisa.jpg',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'name' => 'Lars',
            'email' => 'Lars@gmail.nl',
            'password' => bcrypt('1971'),
            'profile_picture' => '/img/profile_pictures/lars.jpg',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'Admin@gmail.nl',
            'password' => bcrypt('Admin'),
            'admin' => 1,
        ]);
    }
}
