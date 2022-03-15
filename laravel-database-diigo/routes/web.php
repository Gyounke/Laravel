<?php

use App\Http\Controllers\UserController;
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

route::get('/back/users', [UserController::class, "index"])->name("users.index");
route::post("/back/users/{id}/delete", [UserController::class, "destroy"])->name("users.destroy");
route::get("/back/users/{id}/edit", [UserController::class, "edit"])->name("users.edit");
route::post("/back/users/{id}/update", [UserController::class, "update"])->name("users.update");

route::get("/back/users/create", [UserController::class, "create"])->name("users.create");
route::post("/back/users/store", [UserController::class, "store"])->name("users.store");

