<?php

use App\Http\Controllers\customerController;
use App\Http\Controllers\vendorController;
use App\Http\Controllers\jasaController;
use App\Http\Controllers\transaksiController;
use Illuminate\Support\Facades\Route;
use App\Models\customer;
use App\Models\jasa;
use App\Models\kategori;
use App\Models\vendor;
use App\Models\transaksi;

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
    if (session('login')){
        $id = session('id');
        $cust = customer::where('id',$id)->first();
        return view('data',compact('cust'));
    }else{
        return view('data');
    }
});

Route::get('/vendor',function(){
    if (session('vendor')){
        $id = session('vendorid');
        $vendor = vendor::where('id',$id)->first();
        $jasa = jasa::all();
        return view('vendor.index',compact('vendor','jasa'));
    }else{
        return view('vendor.index');
    }
});

Route::get('/vendor/create',function(){
    if (session('vendor')){
        $id = session('vendorid');
        $vendor = vendor::where('id',$id)->first();
        return view('vendor.create',compact('vendor'));
    }else{
        return view('vendor.index');
    }
});

Route::get('/vendor/login',[vendorController::class,'loginpage'])->name('Vendorlogin');
Route::get('/vendor/asik',[vendorController::class,'registerpage'])->name('metalmen');
Route::post('/vendor',[vendorController::class,'CreateJasa'])->name('nambahjasa');
Route::post('/vendor/login',[vendorController::class,'vendorlogin'])->name('vendorlog');
Route::post('/vendor/asik',[vendorController::class,'vendorregister'])->name('vendorregis');
// Route::get('/vendor/{$vendor}/create','vendorController@createjasa');

//For Profile
Route::get('/profile',function(){
    if (session('login')){ 
        $id = session('id');
        $cust = customer::where('id',$id)->first();
        return view('user.profile',compact('cust'));
    }else{
        return view('data');
    }
});
Route::post('/profile',[customerController::class,'update'])->name('update');

//For Login and Register Page
Route::get('registerpage',[customerController::class,'registerpage'])->name('registerpage');
Route::post('register',[customerController::class,'register'])->name('register');
Route::get('login', [customerController::class,'loginpage'])->name('loginpage');
Route::post('login',[customerController::class,'login'])->name('login');
Route::get('logout',[customerController::class,'logout'])->name('Logout');