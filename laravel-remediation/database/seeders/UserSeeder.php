<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => "bgdu1030",
            'email' => "bgdu1030@hotmail.com",
            'password' => 'testtest',
            'password' => Hash::make('123456'),
            'status' => 1,
        ]);
    }
}
