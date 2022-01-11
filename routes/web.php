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
    return view('data');
});

Route::get('/login', function () {
    return view('login');
});

// Route::get('/regis', function () {
//     return view('register');
// });

Route::get('/profile', function(){
    return view('');
});

Route::resource('/register', registercontroller::class);
// Route::resource('/regis', customerController::class);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
