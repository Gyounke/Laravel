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

Route::get('backoffice', function () {
    return view('backoffice');
});

Route::get('backoffice/about', [AboutController::class,'index'])->name("abouts.index");

Route::get('backoffice/discover', [DiscoverController::class,'index'])->name("discovers.index");

Route::get('backoffice/feature', [FeatureController::class,'index'])->name("features.index");

Route::get('backoffice/navlink', [NavlinkController::class,'index'])->name("navlinks.index");

Route::get('backoffice/portfolio', [PortfolioController::class,'index'])->name("portfolios.index");

Route::get('backoffice/service', [ServiceController::class,'index'])->name("services.index");

Route::get('backoffice/skill', [SkillController::class,'index'])->name("skills.index");

Route::get('backoffice/title', [TitleController::class,'index'])->name("titles.index");



Route::post('/backoffice/about/{id}/delete', [AboutController::class, "destroy"])->name("abouts.destroy");

Route::post('/backoffice/feature/{id}/delete', [FeatureController::class, "destroy"])->name("features.destroy");

Route::post('/backoffice/navlink/{id}/delete', [NavlinkController::class, "destroy"])->name("navlinks.destroy");

Route::post('/backoffice/portfolio/{id}/delete', [PortfolioController::class, "destroy"])->name("portfolios.destroy");

Route::post('/backoffice/service/{id}/delete', [ServiceController::class, "destroy"])->name("services.destroy");

Route::post('/backoffice/skill/{id}/delete', [SkillController::class, "destroy"])->name("skills.destroy");

Route::post('/backoffice/title/{id}/delete', [TitleController::class, "destroy"])->name("titles.destroy");

Route::get('/aboutedit/{id}', [AboutController::class, "edit"])->name("abouts.edit");

Route::post('/aboutupdate/{id}', [AboutController::class, "update"])->name("abouts.update");

Route::get('/featureedit/{id}', [FeatureController::class, "edit"])->name("features.edit");

Route::post('/featureupdate/{id}', [FeatureController::class, "update"])->name("features.update");

Route::get('/navlinkedit/{id}', [NavlinkController::class, "edit"])->name("navlinks.edit");

Route::post('/navlinkupdate/{id}', [NavlinkController::class, "update"])->name("navlinks.update");

Route::get('/portfolioedit/{id}', [PortfolioController::class, "edit"])->name("portfolios.edit");

Route::post('/portfolioupdate/{id}', [PortfolioController::class, "update"])->name("portfolios.update");

Route::get('/serviceedit/{id}', [ServiceController::class, "edit"])->name("services.edit");

Route::post('/serviceupdate/{id}', [ServiceController::class, "update"])->name("services.update");

Route::get('/skilledit/{id}', [SkillController::class, "edit"])->name("skills.edit");

Route::post('/skillupdate/{id}', [SkillController::class, "update"])->name("skills.update");

Route::get('/titleedit/{id}', [TitleController::class, "edit"])->name("titles.edit");

Route::post('/titleupdate/{id}', [TitleController::class, "update"])->name("titles.update");

route::get("/back/users", [userController::class, "index"])->name("users.index");
route::post("/back/users/{id}/delete", [UserController::class, "destroy"])->name("users.destroy");

route::get("/back/users/{id}/edit", [UserController::class, "edit"])->name("users.edit");
route::post("/back/users/{id}/update", [UserController::class, "update"])->name("users.update");

route::get("/back/users/{id}/create", [UserController::class, "create"])->name("users.create");
route::post("/back/users/{id}/store", [UserController::class, "store"])->name("users.store");

