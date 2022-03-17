<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TitleSeeder::class,
            AboutSeeder::class,
            FactSeeder::class,
            PortfolioSeeder::class,
            SkillSeeder::class,
        ]); 
    }
}
