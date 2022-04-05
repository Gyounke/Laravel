<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\Player;
use App\Models\Photo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            RoleSeeder::class
        ]);

        DB::table("teams")->insert([
            "name" => "Without team",
            "country" => " ",
            "continent" => " ",
            "attack" => 999,
            "center" => 999,
            "defense" => 999,
            "replacment" => 999,
        ]);

        Team::factory(10)->create();
        Player::factory(50)->create();
        Photo::factory(50)->create();
    }
}
