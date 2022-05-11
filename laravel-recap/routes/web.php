<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\http\Controllers\UserController;
use App\Http\Controllers\BannerController;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\Banner;
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
    $services = Service::all();
    $testimonials = Testimonial::all();
    $users = User::all();
    $banners = Banner::all();
    return view('welcome', compact("services","testimonials","users","banners"));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// Middleware for back

route::middleware(['auth'])->group(function () {

    // Services
    Route::get('/back/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/back/services/{id}/read', [ServiceController::class, 'read'])->name('services.read');
    Route::get('/back/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::post('/back/services/{id}/update', [ServiceController::class, 'update'])->name('services.update');
    Route::get('/back/services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('/back/services/store', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/back/services/{id}/show', [ServiceController::class, 'show'])->name('services.show');


    // Testimonials
    Route::get('/back/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
    Route::get('/back/testimonials/{id}/read', [TestimonialController::class, 'read'])->name('testimonials.read');
    Route::get('/back/testimonials/{id}/edit', [TestimonialController::class, 'edit'])->name('testimonials.edit');
    Route::post('/back/testimonials/{id}/update', [TestimonialController::class, 'update'])->name('testimonials.update');
    Route::get('/back/testimonials/create', [TestimonialController::class, 'create'])->name('testimonials.create');
    Route::post('/back/testimonials/store', [TestimonialController::class, 'store'])->name('testimonials.store');
    Route::get('/back/testimonials/{id}/show', [TestimonialController::class, 'show'])->name('testimonials.show');

    // Users
    Route::get('/back/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/back/users/{id}/read', [UserController::class, 'read'])->name('users.read');
    Route::get('/back/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/back/users/{id}/update', [UserController::class, 'update'])->name('users.update');
    Route::get('/back/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/back/users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/back/users/{id}/show', [UserController::class, 'show'])->name('users.show');

    // Banners
    Route::get('/back/banners', [BannerController::class, 'index'])->name('banners.index');
    Route::get('/back/banners/{id}/read', [BannerController::class, 'read'])->name('banners.read');
    Route::get('/back/banners/{id}/edit', [BannerController::class, 'edit'])->name('banners.edit');
    Route::post('/back/banners/{id}/update', [BannerController::class, 'update'])->name('banners.update');

});