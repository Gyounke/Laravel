<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Commentaire;
use App\Models\Article;

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
    $article = Article::first();
    dd($article->commentaires[0]->name);
    return view('welcome');
});
