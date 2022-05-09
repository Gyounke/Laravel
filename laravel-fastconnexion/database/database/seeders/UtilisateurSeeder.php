<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('utilisateurs')->insert([
            'nom' => 'Du jardin',
            'prenom' => 'Jean',
            'email' => 'Jeandujardin@gmail.com',
            'adresse' => 'rue des artisans 24',
            'role_id' => '1',
        ]);
        DB::table('utilisateurs')->insert([
            'nom' => 'Du jardin',
            'prenom' => 'Jean2',
            'email' => 'Jean2dujardin@gmail.com',
            'adresse' => 'rue des artisans 22',
            'role_id' => '2',
        ]);
        DB::table('utilisateurs')->insert([
            'nom' => 'Du jardin',
            'prenom' => 'Jean3',
            'email' => 'Jean3dujardin@gmail.com',
            'adresse' => 'rue des artisans 23',
            'role_id' => '1',
        ]);
        DB::table('utilisateurs')->insert([
            'nom' => 'Du jardin',
            'prenom' => 'Jean4',
            'email' => 'Jean4dujardin@gmail.com',
            'adresse' => 'rue des artisans 21',
            'role_id' => '2',
        ]);
        DB::table('utilisateurs')->insert([
            'nom' => 'Du jardin',
            'prenom' => 'Jean5',
            'email' => 'Jean5dujardin@gmail.com',
            'adresse' => 'rue des artisans 25',
            'role_id' => '1',
        ]);
        DB::table('utilisateurs')->insert([
            'nom' => 'Du jardin',
            'prenom' => 'Jean6',
            'email' => 'Jean6dujardin@gmail.com',
            'adresse' => 'rue des artisans 26',
            'role_id' => '2',
        ]);
        DB::table('utilisateurs')->insert([
            'nom' => 'Du jardin',
            'prenom' => 'Jean7',
            'email' => 'Jean6dujardin@gmail.com',
            'adresse' => 'rue des artisans 27',
            'role_id' => '1',
        ]);
        DB::table('utilisateurs')->insert([
            'nom' => 'Du jardin',
            'prenom' => 'Jean8',
            'email' => 'Jean8dujardin@gmail.com',
            'adresse' => 'rue des artisans 28',
            'role_id' => '2',
        ]);
        DB::table('utilisateurs')->insert([
            'nom' => 'Du jardin',
            'prenom' => 'Jean9',
            'email' => 'Jean9dujardin@gmail.com',
            'adresse' => 'rue des artisans 29',
            'role_id' => '1',
        ]);
        DB::table('utilisateurs')->insert([
            'nom' => 'Du jardin',
            'prenom' => 'Jean10',
            'email' => 'Jean10dujardin@gmail.com',
            'adresse' => 'rue des artisans 30',
            'role_id' => '2',
        ]);
        //
    }
}
