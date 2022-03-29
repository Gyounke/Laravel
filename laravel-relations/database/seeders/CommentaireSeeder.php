<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("commentaires")->insert([
            "name" => "com1",
            "contenu" => "lolilol",
            "article_id" => 1,
        ]);
        DB::table("commentaires")->insert([
            "name" => "com2",
            "contenu" => "lolilol2",
            "article_id" => 2,
        ]);
    }
}
