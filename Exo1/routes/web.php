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

//  EXO 1 

// Route::get('/', function() {
//     return "Bonjour chers utilisateurs";
// });

// Route::get('/lel', function() {
//     return "Bienvenue sur mon site";
// });

// Route::get('/posts/{param}', function($param) {
//     return "Hello $param";
// });

// Route::get('/posts', function() {
//     return view('posts.index');
// });


// EXO 2 

Route::get('/welcome',function(){
    return view("welcome");
});
Route::get('/about',function(){
    return view("about");
});



