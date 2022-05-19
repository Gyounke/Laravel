<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'name' => 'Nick Smith', 
            'field' => 'Physic Teacher',
            'description' => 'Ugh chambray lumbersexual food artisan meditation sartorial well post-ironic wes&a', 
        ]);
        DB::table('teachers')->insert([
            'name' => 'John Rosado', 
            'field' => 'English Teacher',
            'description' => 'Ugh chambray lumbersexual food artisan meditation sartorial well post-ironic wes&a', 
        ]);
        DB::table('teachers')->insert([
            'name' => 'Maria Lehmann', 
            'field' => 'Design Teacher',
            'description' => 'Ugh chambray lumbersexual food artisan meditation sartorial well post-ironic wes&a', 
        ]);
        DB::table('teachers')->insert([
            'name' => 'Samuel Delossantos', 
            'field' => 'Math Teacher',
            'description' => 'Ugh chambray lumbersexual food artisan meditation sartorial well post-ironic wes&a', 
        ]);
    }
}
