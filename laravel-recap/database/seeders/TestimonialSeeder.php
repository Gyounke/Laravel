<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'name' => 'David Martino Co',
            'date' => '30 November 2021',
            'role' => 'Financial Apps',
            'rating' => '4.8',
        ]);
        DB::table('testimonials')->insert([
            'name' => 'Jake Harris Nyo',
            'date' => '29 November 2021',
            'role' => 'Digital Business',
            'rating' => '4.5',
        ]);
        DB::table('testimonials')->insert([
            'name' => 'May Catherina',
            'date' => '27 November 2021',
            'role' => 'Business & Economics',
            'rating' => '4.7',
        ]);
        DB::table('testimonials')->insert([
            'name' => 'Random User',
            'date' => '24 November 2021',
            'role' => 'New App Ecosystem',
            'rating' => '3.9',
        ]);
        DB::table('testimonials')->insert([
            'name' => 'Mark Amber Do',
            'date' => '21 November 2021',
            'role' => 'Web Development',
            'rating' => '4.3',
        ]);
    }
}
