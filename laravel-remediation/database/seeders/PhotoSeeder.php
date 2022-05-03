<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            'title' => 'Photo 1',
            'src' => 'images/close.png',
            'mime_type' => 'image/png',
            'title' => 'Photo 1',
            'alt' => 'Photo 1',
            'description' => 'Photo 1',
        ]);
        DB::table('photos')->insert([
            'title' => 'Photo 2',
            'src' => 'images/close.png',
            'mime_type' => 'image/close.png',
            'title' => 'Photo 2',
            'alt' => 'Photo 2',
            'description' => 'Photo 2',
        ]);
        DB::table('photos')->insert([
            'title' => 'Photo 3',
            'src' => 'images/close.png',
            'mime_type' => 'image/close.png',
            'title' => 'Photo 3',
            'alt' => 'Photo 3',
            'description' => 'Photo 3',
        ]);
        DB::table('photos')->insert([
            'title' => 'Photo 4',
            'src' => 'images/close.png',
            'mime_type' => 'image/close.png',
            'title' => 'Photo 4',
            'alt' => 'Photo 4',
            'description' => 'Photo 4',
        ]);
        DB::table('photos')->insert([
            'title' => 'Photo 5',
            'src' => 'images/close.png',
            'mime_type' => 'image/close.png',
            'title' => 'Photo 5',
            'alt' => 'Photo 5',
            'description' => 'Photo 5',
        ]);
        DB::table('photos')->insert([
            'title' => 'Photo 6',
            'src' => 'images/close.png',
            'mime_type' => 'image/close.png',
            'title' => 'Photo 6',
            'alt' => 'Photo 6',
            'description' => 'Photo 6',
        ]);
        DB::table('photos')->insert([
            'title' => 'Photo 7',
            'src' => 'images/close.png',
            'mime_type' => 'image/close.png',
            'title' => 'Photo 7',
            'alt' => 'Photo 7',
            'description' => 'Photo 7',
        ]);
        DB::table('photos')->insert([
            'title' => 'Photo 8',
            'src' => 'images/close.png',
            'mime_type' => 'image/close.png',
            'title' => 'Photo 8',
            'alt' => 'Photo 8',
            'description' => 'Photo 8',
        ]);
        DB::table('photos')->insert([
            'title' => 'Photo 9',
            'src' => 'images/close.png',
            'mime_type' => 'image/close.png',
            'title' => 'Photo 9',
            'alt' => 'Photo 9',
            'description' => 'Photo 9',
        ]);
        DB::table('photos')->insert([
            'title' => 'Photo 10',
            'src' => 'images/close.png',
            'mime_type' => 'image/close.png',
            'title' => 'Photo 10',
            'alt' => 'Photo 10',
            'description' => 'Photo 10',
        ]);
    }
}
