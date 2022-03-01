<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/{variable}", function ($variable) {
    if ($variable === "about") {
        $phrase = "Bienvenu à la page about";
        return view("pages.about", compact("phrase"));
    } else if ($variable === "contact") {
        $nom = "Blistein";
        $prenom = "Kevin";
        $age = 28;
        return view("pages.contact", compact("nom", "prenom", "age"));
    } else if ($variable === "coding") {
        $prenoms = array( "Maxime", "Elias", "Nicolas", "Ayhan", "Cactus");
        $personne = (object)[
            "nom" => "Coding",
            "prenom" => "Ashen One",
            "age" => 30
        ];
        return view("pages.coding", compact("prenoms", "personne"));
    } else {
        return view("welcome");
    }
});

