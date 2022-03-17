<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'categories' => 'birthday:',
            'value' => '1 May 1995',
        ]);

        DB::table('abouts')->insert([
            'categories' => 'Website:',
            'value' => 'www.example;com',
        ]);

        DB::table('abouts')->insert([
            'categories' => 'Phone:',
            'value' => '+123 456 789'
        ]);

        DB::table('abouts')->insert([
            'categories' => 'City:',
            'value' => 'New York, USA'
        ]);

        DB::table('abouts')->insert([
            'categories' => 'Age:',
            'value' => '30',
        ]);

        DB::table('abouts')->insert([
            'categories' => 'Degree',
            'value' => 'Master',
        ]);

        DB::table('abouts')->insert([
            'categories' => 'PhEmailone',
            'value' => 'email@example.com'
        ]);

        DB::table('abouts')->insert([
            'categories' => 'Freelance',
            'value' => 'Available',
        ]);
    }
}
