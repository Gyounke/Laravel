<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'lastname' => "Leukah",
            'firstname' => "Belek",
            'age' => 29,
            'address' => "Diamond street n°37",
            'email' => "leukah_belek@hotmail.com",
            'password' => bcrypt('password'),
            'status' => "admin",
        ]);
    }
}
