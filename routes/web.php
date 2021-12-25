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
    return view('Rafly_home',[
        "title" => "Home"
    ]);
});
Route::resource('vaccine',Rafly_vaccinessControllers::class,);
Route::resource('patient',Rafly_patientsControllers::class,);
Route::get('/patient/{vaccine}/create','Rafly_patientsControllers@create');