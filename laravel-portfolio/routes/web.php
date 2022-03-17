<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\PortfolioController;
use App\Models\Title;
use App\Models\About;
use App\Models\Fact;
use App\Models\Skill;
use App\Models\Portfolio;


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



Route::get('/', function () {
    $titles = Title::all();
    $abouts = About::all();
    $facts = Fact::all();
    $skills = Skill::all();
    $portfolios = Portfolio::all();
    return view('welcome', compact('titles', 'abouts', 'facts', 'skills', 'portfolios'));
});

