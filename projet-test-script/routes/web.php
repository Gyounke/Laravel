<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\TestController;

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
// Test
Route::get('/back/tests', [TestController::class, 'index'])->name('test.index');
// Title
Route::get('/back/titles', [TitleController::class, 'index'])->name('title.index');
Route::get('/back/titles/create', [TitleController::class, 'create'])->name('title.create');
Route::post('/back/titles/store', [TitleController::class, 'store'])->name('title.store');
Route::get('/back/titles/{id}/read', [TitleController::class, 'read'])->name('title.read');
Route::get('/back/titles/{id}/edit', [TitleController::class, 'edit'])->name('title.edit');
Route::post('/back/titles/{id}/update', [TitleController::class, 'update'])->name('title.update');
Route::post('/back/titles/{id}/delete', [TitleController::class, 'destroy'])->name('title.destroy');
