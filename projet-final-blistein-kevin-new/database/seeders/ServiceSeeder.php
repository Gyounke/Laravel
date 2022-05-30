<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'icone' => 'fa fa-graduation-cap',
            'title' => 'Graduated Steps',
            'description' => 'Photo booth Banksy YOLO mixtape post-ironic they sold out all.',
        ]);

        DB::table('services')->insert([
            'icone' => 'fa fa-globe',
            'title' => 'Global Interested',
            'description' => 'Photo booth Banksy YOLO mixtape post-ironic they sold out all.',
        ]);

        DB::table('services')->insert([
            'icone' => 'fa fa-clock-o',
            'title' => 'Circular Clock',
            'description' => 'Photo booth Banksy YOLO mixtape post-ironic they sold out all.',
        ]);

        DB::table('services')->insert([
            'icone' => 'fa fa-book',
            'title' => 'Open Book',
            'description' => 'Photo booth Banksy YOLO mixtape post-ironic they sold out all.',
        ]);
    }
}
