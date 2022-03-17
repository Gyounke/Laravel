<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            "icon" => "bi bi-emoji-smile", 
            "title" => "232",
            "boldtext" => "Happy Clients",
            "text" => "consequuntur quae"
        ]);

        DB::table('facts')->insert([
            'icon' => 'bi bi-journal-richtext',
            'title' => '521',
            'boldtext' => 'Projects',
            'text' => 'dipisci atque cum quia aut',
        ]);

        DB::table('facts')->insert([
            'icon' => 'bi bi-headset',
            'title' => '1453',
            'boldtext' => 'Hours Of Support',
            'text' => ' aut commodi quaerat',
        ]);

        DB::table('facts')->insert([
            'icon' => 'bi bi-people',
            'title' => '32',
            'boldtext' => 'Hard Workers',
            'text' => ' rerum asperiores dolor',
        ]);
    }
}
