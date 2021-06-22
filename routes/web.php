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

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
// Route::get('/', function() {
//     return view('welcome2');
// })->name('home');


// Route::get('/home', function () {
//     return view('welcome2');
// })->name('home');

// Route::get('/dashboard', function() {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/profile', function() {
//     return view('dashboard');
// })->middleware(['auth'])->name('profile');


Route::middleware(['theme:base-tailwind'])->group(function() {
    Route::get('/', function() { return view('welcome'); });
    Route::get('/home', function() { return view('welcome'); })->name('home');
});

Route::middleware(['auth', 'theme:base-tailwind'])->group(function () {
    Route::get('/dashboard', function() { return view('dashboard'); })->name('dashboard');
    Route::get('/profile', function() { return view('profile2'); })->name('profile');
});

require __DIR__.'/auth.php';

