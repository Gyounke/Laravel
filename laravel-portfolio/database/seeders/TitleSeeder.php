<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
            "text" => "Bob Bert",
        ]);

        DB::table('titles')->insert([
            "text" => "UI/UX Designer & Web Developer.",
        ]);

        DB::table('titles')->insert([
            "text" => "Facts",
        ]);

        DB::table('titles')->insert([
            "text" => "Skills",
        ]);

        DB::table('titles')->insert([
            "text" => "Portfolio",
        ]);

        DB::table('titles')->insert([
            "text" => "Testimonials",
        ]);

        DB::table('titles')->insert([
            "text" => "Contact",
        ]);
    }
}
