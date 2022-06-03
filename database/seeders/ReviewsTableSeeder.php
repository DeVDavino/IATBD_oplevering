<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'user_id' => 6,
            'title' => 'Top-oppas',
            'description' => 'Zeer goeie oppas, mijn hond was uitgeput en klaar om te knuffelen op de sofa',
            'rating' => 5,
        ]);

        DB::table('reviews')->insert([
            'user_id' => 6,
            'title' => 'Aardig',
            'description' => 'Aardige vent en houdt heel veel van honden.',
            'rating' => 5,
        ]);

        DB::table('reviews')->insert([
            'user_id' => 7,
            'title' => 'Super vriendelijk',
            'description' => 'Een vriendelijke gozer die van dieren houdt, zeer goede oppas.',
            'rating' => 4,
        ]);
    }
}
