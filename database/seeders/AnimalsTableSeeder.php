<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
            'owner_id' => 1,
            'sitter_id' => 1,
            'name' => 'Buddy',
            'image' => '/img/Goldie.jpg',
            'animal' => 'Hond',
            'breed' => 'Golden Retriever',
            'date' => '2022-06-15',
            'time' => '12:00-18:00',
            'hourly_rate' => '45.00',
            'description' => 'Super schattige puppie en heel lief.',
        ]);

        DB::table('animals')->insert([
            'owner_id' => 1,
            'sitter_id' => 1,
            'name' => 'Pebbels',
            'image' => '/img/Pebbels.jpg',
            'animal' => 'Kat',
            'breed' => 'Siamese',
            'date' => '2022-06-08',
            'time' => '17:00-22:00',
            'hourly_rate' => '50.00',
            'description' => 'Pebbels heeft vaak zoomies, ze houdt van dozen.',
        ]);

        DB::table('animals')->insert([
            'owner_id' => 1,
            'sitter_id' => 1,
            'name' => 'Dana',
            'image' => '/img/Dalmation.jpg',
            'animal' => 'Hond',
            'breed' => 'Dalmation',
            'date' => '2022-06-19',
            'time' => '12:00-18:00',
            'hourly_rate' => '30.00',
            'description' => 'Dana is heel lief en houdt van knuffelen en interacteren met andere honden tijdens wandelen.',
        ]);

        DB::table('animals')->insert([
            'owner_id' => 1,
            'sitter_id' => 1,
            'name' => 'Desire',
            'image' => '/img/Desire.jpg',
            'animal' => 'Kat',
            'breed' => 'Grey Face Ragdoll',
            'date' => '2022-06-16',
            'time' => '13:00-18:00',
            'hourly_rate' => '35.00',
            'description' => 'Schattig en stil, kijkt meestal heel aandachtig aan.',
        ]);
    }
}
