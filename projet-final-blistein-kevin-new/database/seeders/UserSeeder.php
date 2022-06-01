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
        DB::table('users')->insert([
            'lastname' => "Eren",
            'firstname' => "Sankaran",
            'age' => "18",
            'address' => "Kochi street n°7",
            'email' => "coquinou@hotmail.com", 
            'password' => Hash::make('123456'),
            'status' => 1,
        ]);

        DB::table('users')->insert([
            'lastname' => "Bobi",
            'firstname' => "Dante",
            'age' => "38",
            'address' => "Sake street n°7",
            'email' => "filou@hotmail.com", 
            'password' => Hash::make('123456'),
            'status' => 2,
        ]);

        DB::table('users')->insert([
            'lastname' => "Sarah",
            'firstname' => "Millenium",
            'age' => "35",
            'address' => "Op street n°7",
            'email' => "bandito@hotmail.com", 
            'password' => Hash::make('123456'),
            'status' => 2,
        ]);

        DB::table('users')->insert([
            'lastname' => "Killian",
            'firstname' => "Poporov",
            'age' => "49",
            'address' => "Padding street n°7",
            'email' => "tagada@hotmail.com", 
            'password' => Hash::make('123456'),
            'status' => 3,
        ]);

        DB::table('users')->insert([
            'lastname' => "Zozo",
            'firstname' => "Sacrieur",
            'age' => "32",
            'address' => "ZAD street n°7",
            'email' => "sacripan@hotmail.com", 
            'password' => Hash::make('123456'),
            'status' => 3,
        ]);

        DB::table('users')->insert([
            'lastname' => "Mikasa",
            'firstname' => "Nextgen",
            'age' => "26",
            'address' => "Shiganshina street n°7",
            'email' => "badouss@hotmail.com", 
            'password' => Hash::make('123456'),
            'status' => 4,
        ]);

        DB::table('users')->insert([
            'lastname' => "Tim",
            'firstname' => "lafrappe",
            'age' => "26",
            'address' => "Thug street n°7",
            'email' => "lascar@hotmail.com", 
            'password' => Hash::make('123456'),
            'status' => 4,
        ]);
    }
}
