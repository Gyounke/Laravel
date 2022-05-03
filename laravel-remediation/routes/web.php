<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Title;
use App\Models\Banner;
use App\Models\Service;
use App\Models\Map;
use App\Models\Testimonial;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\TestimonialController;


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
    $users = User::all();
    $titles = Title::all();
    $banners = Banner::all();
    $services = Service::all();
    $testimonials = Testimonial::all();
    $maps = Map::all();
    return view('welcome', compact("banners","users","titles","services","maps","testimonials"));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::middleware(['auth'])->group(function () {

// Users    
Route::get('/back/users', [UserController::class, 'index'])->name('users.index');
Route::get('back/users/{id}/read', [UserController::class, 'read'])->name('users.read');
Route::get('back/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::post('back/users/{id}/update', [UserController::class, 'update'])->name('users.update');

// Banners
Route::get('/back/banners', [BannerController::class, 'index'])->name('banners.index');
Route::get('/back/banners/{id}/read', [BannerController::class, 'read'])->name('banners.read');
Route::get('/back/banners/{id}/edit', [BannerController::class, 'edit'])->name('banners.edit');
Route::post('/back/banners/{id}/update', [BannerController::class, 'update'])->name('banners.update');

// Titles
Route::get('/back/titles', [TitleController::class, 'index'])->name('titles.index');
Route::get('/back/titles/{id}/read', [TitleController::class, 'read'])->name('titles.read');
Route::get('/back/titles/{id}/edit', [TitleController::class, 'edit'])->name('titles.edit');
Route::post('/back/titles/{id}/update', [TitleController::class, 'update'])->name('titles.update');

// Services
Route::resource('/back/services', ServiceController::class );

// Testimonials
Route::resource('/back/testimonials', TestimonialController::class );

// Maps
Route::get('/back/maps', [MapController::class, 'index'])->name('maps.index');
Route::get('/back/maps/{id}/read', [MapController::class, 'read'])->name('maps.read');
Route::get('/back/maps/{id}/edit', [MapController::class, 'edit'])->name('maps.edit');
Route::post('/back/maps/{id}/update', [MapController::class, 'update'])->name('maps.update');
});
