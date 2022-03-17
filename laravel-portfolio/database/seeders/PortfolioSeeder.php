<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            'imgpath' => 'portfolio-1.jpg',
            'tag' => 'filter-app',
        ]);

        DB::table('portfolios')->insert([
            'imgpath' => 'portfolio-2.jpg',
            'tag' => 'filter-web',
        ]);

        DB::table('portfolios')->insert([
            'imgpath' => 'portfolio-3.jpg',
            'tag' => 'filter-app',
        ]);

        DB::table('portfolios')->insert([
            'imgpath' => 'portfolio-4.jpg',
            'tag' => 'filter-card',
        ]);

        DB::table('portfolios')->insert([
            'imgpath' => 'portfolio-5.jpg',
            'tag' => 'filter-web',
        ]);

        DB::table('portfolios')->insert([
            'imgpath' => 'portfolio-6.jpg',
            'tag' => 'filter-app',
        ]);

        DB::table('portfolios')->insert([
            'imgpath' => 'portfolio-7.jpg',
            'tag' => 'filter-card',
        ]);

        DB::table('portfolios')->insert([
            'imgpath' => 'portfolio-8.jpg',
            'tag' => 'filter-card',
        ]);

        DB::table('portfolios')->insert([
            'imgpath' => 'portfolio-9.jpg',
            'tag' => 'filter-web',
        ]);
    }
}
