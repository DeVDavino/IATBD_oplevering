<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('requests')->insert([
            'user_id' => 1,
            'name' => 'Danique Valstar',
            'email' => 'valstar.d@hsleiden.nl',
            'phone_number' => '065678901',
            'title' => 'Pebbels',
            'description' => 'Hallo, ik ben Danique en ik vroeg me af of ik op je Kat kon oppassen. Ze ziet er zo schattig uit!',
        ]);

       
    }
}
