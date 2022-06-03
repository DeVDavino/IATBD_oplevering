<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Davino Rosaria',
            'email' => 's1099523@student.hsleiden.nl',
            'password' => bcrypt('laravel'),
            'phone_number' => '061234567',
            'role' => 'Owner',
            'profile_picture' => '/img/Davino.jpeg',
            'registered' => true,
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@hsleiden.nl',
            'password' => bcrypt('laravel'),
            'phone_number' => '0614985913',
            'role' => 'Admin',
            'profile_picture' => '/img/Default.jpg',
            'registered' => true,
        ]);

        DB::table('users')->insert([
            'name' => 'Blocked',
            'email' => 'blocked@hsleiden.nl',
            'password' => bcrypt('laravel'),
            'phone_number' => '0614985913',
            'blocked' => true,
            'profile_picture' => '/img/Default.jpg',
            'registered' => true,
        ]);

        DB::table('users')->insert([
            'name' => 'Danique Valstra',
            'email' => 'valstar.d@hsleiden.nl',
            'password' => bcrypt('laravel'),
            'phone_number' => '065678901',
            'description' => 'Ik ben Danique, dieren liefhebber. Ik ben op zoek naar een bijbaantje voor naast mij baan als docent.',
            'role' => 'Sitter',
            'profile_picture' => '/img/Danique.jpg',
            'registered' => true,
        ]);

        DB::table('users')->insert([
            'name' => 'Jaap Kanbier',
            'email' => 'kanbier.j@hsleiden.nl',
            'password' => bcrypt('laravel'),
            'phone_number' => '061234568',
            'description' => 'Ik ben Jaap, dieren liefhebber. Ik ben op zoek naar een bijbaantje voor naast mij baan als docent.',
            'role' => 'Sitter',
            'profile_picture' => '/img/Jaap.jpg',
            'registered' => true,
        ]);

        DB::table('users')->insert([
            'name' => 'Abel Adema',
            'email' => 's1115759@student.hsleiden.nl',
            'password' => bcrypt('laravel'),
            'phone_number' => '0614985913',
            'description' => 'Ik ben Abel, dieren liefhebber. Ik ben op zoek naar een bijbaantje voor naast mijn studie.',
            'role' => 'Sitter',
            'profile_picture' => '/img/Abel.jpg',
            'registered' => true,
        ]);

        DB::table('users')->insert([
            'name' => 'Kilian van Embden',
            'email' => 's1094387@student.hsleiden.nl',
            'password' => bcrypt('laravel'),
            'phone_number' => '0614985913',
            'description' => 'Ik ben Kilian, dieren liefhebber. Ik ben op zoek naar een bijbaantje voor naast mijn studie.',
            'role' => 'Sitter',
            'profile_picture' => '/img/Kilian.jpg',
            'registered' => true,
        ]);
    }
}
