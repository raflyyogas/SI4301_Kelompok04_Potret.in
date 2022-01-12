<?php

use App\Http\Controllers\customerController;
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

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/profile', function(){
    return view('');
});

Route::get('registerpage',[customerController::class,'registerpage'])->name('registerpage');
Route::post('register',[customerController::class,'register'])->name('register');
Route::get('login', [customerController::class,'loginpage'])->name('loginpage');
Route::post('login',[customerController::class,'login'])->name('login');
Route::get('logout',[customerController::class,'logout'])->name('Logout');
Route::get('profile',[customerController::class,'profile'])->name('profile');
Route::post('editprofile',[customerController::class,'editprofile'])->name('edit');
// Route::resource('register', registercontroller::class);
// Route::post('login', [App\Http\Controllers\login_controller::class,'login'])->name('login');
// Route::resource('/regis', customerController::class);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
