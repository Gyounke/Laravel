<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Car;
use App\Models\Team;
use App\Models\Article;
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
        return [
            User::factory()->count(20)->create(),
            Car::factory()->count(5)->create(),
            Team::factory()->count(30)->create(),
            Article::factory()->count(40)->create(),
        ];   
    }
}
