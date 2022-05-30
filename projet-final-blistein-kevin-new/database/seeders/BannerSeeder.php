<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'image' => 'logo.jpg',
            'title' => 'Are you ready to study ? We have the',
            'button' => 'Solution',
            'description' => 'Nunc eget tempor neque. Aenean non ex sed nibh euismod<br>ornare. Nam congue nisi purus, sed luctus risus.',
        ]);

        DB::table('banners')->insert([
            'image' => 'logo-2.jpg',
            'title' => 'Are you ready to study ? We have the',
            'button' => 'Features',
            'description' => 'Nunc eget tempor neque. Aenean non ex sed nibh euismod<br>ornare. Nam congue nisi purus, sed luctus risus.',
        ]);
    }
}
