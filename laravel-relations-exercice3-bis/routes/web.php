<?php

use App\Http\Controller\TeamController;
use App\Http\Controller\PlayerController;
use App\Models\Team;
use App\Models\Player;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\BinaryOp\Equal;

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
    $teams = Team::all();
    $players = Team::all();
    return view('welcome', compact("teams", "players"));
});

Route::resource("/back/team", TeamController::class);
Route::resource("back/player", PlayerController::class);
