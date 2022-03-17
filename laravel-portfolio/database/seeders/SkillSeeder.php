<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'langage' => 'HTML',
            'value' => '100%',
            'level' => '100',
        ]);

        DB::table('skills')->insert([
            'langage' => 'CSS',
            'value' => '90%',
            'level' => '90',
        ]);

        DB::table('skills')->insert([
            'langage' => 'JavaScript',
            'value' => '75%',
            'level' => '75',
        ]);

        DB::table('skills')->insert([
            'langage' => 'PHP',
            'value' => '80%',
            'level' => '80',
        ]);

        DB::table('skills')->insert([
            'langage' => 'WordPress/CMS',
            'value' => '90%',
            'level' => '90',
        ]);

        DB::table('skills')->insert([
            'langage' => 'Photoshop',
            'value' => '55%',
            'level' => '55',
        ]);
    }
}
