<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("articles")->insert([
            "name" => "Article 1",
            "description" => "lorem ipsum blad adp nndaiheu",
        ]);
        DB::table("articles")->insert([
            "name" => "Article 2",
            "description" => "loremp caina silo Pmaloid lm,diueenbfz ",
        ]);
    }
}
