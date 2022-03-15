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

// Routes User

Route::get("/back/users", [UserController::class, "index"])->name("users.index");
Route::post("/back/users/{id}/delete", [UserController::class, "destroy"])->name("users.destroy");

Route::get(":back/users/{id}/edit", [UserController::class, "edit"])->name("users.edit");
Route::post("/back/users/{id}/update", [UserController::class, "update"])->name("users.update");

Route::get("back/users/{id}/create", [UserController::class, "create"])->name("users.create");
Route::post("back/users/{id}/store", [UserController::class, "store"])->name("users.store");

// Routes Car

Route::get("/back/cars", [CarController::class, "index"])->name("cars.index");
Route::post("/back/cars/{id}/delete", [CarController::class, "destroy"])->name("cars.destroy");

Route::get("/back/cars/{id}/edit", [CarController::class, "edit"])->name("cars.edit");
Route::post("/back/cars/{id}/update", [CarController::class, "update"])->name("cars.update");

Route::get("/back/cars/{id}/create", [CarController::class, "create"])->name("cars.create");
Route::post("/back/cars/{id}/store", [CarController::class, "store"])->name("cars.store");

// Routes Team

Route::get("/back/teams", [TeamController::class, "index"])->name("teams.index");
Route::post("/back/teams/{id}/delete", [TeamController::class, "destroy"])->name("teams.destroy");

Route::get("/back/teams:{id}/edit", [TeamController::class, "edit"])->name("teams.edit");
Route::post("/back/teams/{id}/update", [TeamController::class, "update"])->name("teams.update");

Route::get("/back/teams/{id}/create", [TeamController::class, "create"])->name("teams;create");
Route::post("/back/teams/{id}/store", [TeamController::class, "store"])->name("teams.store");

// Routes Article

Route::get("/back/articles", [ArticleController::class, "index"])->name("articles.index");
Route::post("/back/articles/{id}/delete", [ArticleController::class, "delete"])->name("articles.delete");

Route::get("/back/articles/{id}/edit", [ArticleController::class, "edit"])->name("articles.edit");
Route::post("/back/articles/{id}/update", [ArticleController::class, "update"])->name("articles.update");

Route::get("/back/articles/{id}/create", [ArticleController::class, "create"])->name("artciles.create");
Route::post("/back/articles/{id}/store", [ArticleController::class, "store"])->name("articles.store");