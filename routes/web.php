<?php

use App\Http\Controllers\customerController;
use App\Http\Controllers\vendorController;
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
        $jasa = jasa::all();
        $vendor = vendor::all();
        $cust = customer::where('id',$id)->first();
        return view('data',compact('cust','jasa','vendor'));
    }else{
        return view('data');
    }
});


//For Login and Register Page
Route::get('registerpage',[customerController::class,'registerpage'])->name('registerpage');
Route::post('register',[customerController::class,'register'])->name('register');
Route::get('login', [customerController::class,'loginpage'])->name('loginpage');
Route::post('login',[customerController::class,'login'])->name('login');
Route::get('logout',[customerController::class,'logout'])->name('Logout');

Route::get('/profile',function(){
    if (session('login')){ 
        $id = session('id');
        $cust = customer::where('id',$id)->first();
        return view('user.profile',compact('cust'));
    }else{
        return redirect('/');
    }
});
Route::post('/profile',[customerController::class,'update'])->name('update');
Route::get('/choose/{cust}/{jasa}',[customerController::class,'choosevendor']);
Route::get('/cart/upload/{transaksi}',[customerController::class,'bukti']);
Route::post('/cart',[customerController::class,'upload'])->name('uploadbukti');
Route::post('/transaksi',[customerController::class,'CreateTransaction'])->name('create');
Route::get('/cart', function () {
    if (session('login')){
        $cust = session('id');
        $transaksi = transaksi::where('idCust',$cust)->get();
        return view('cart',compact('transaksi'));
    }else{
        return redirect('/');
    }
});

Route::get('/vendor/status',function(){
    $transaksi = transaksi::all();
    return view('vendor.status',compact('transaksi'));
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

Route::get('/vendor/login',function(){
    return view('vendor.login');
});

Route::get('/vendor/asik',[vendorController::class,'registerpage'])->name('metalmen');

Route::get('/vendor/create',function(){
    if (session('vendor')){
        $id = session('vendorid');
        $kategori = kategori::all();
        $vendor = vendor::where('id',$id)->first();
        return view('vendor.create',compact('vendor','kategori'));
    }else{
        return view('vendor.index');
    }
});

Route::get('Vlogout',[vendorController::class,'Vlogout'])->name('Vlogout');
Route::get('/vendor/{jasa}',[vendorController::class,'viewJasa']);
Route::get('/vendor/status/',function(){
    $transaksi = transaksi::all();
    return view('vendor.status',compact('transaksi'));
});
Route::get('/vendor/status/edit/{transaksi}',[vendorController::class,'editstatus']);
Route::post('/vendor/status',[vendorController::class,'uploadstatus'])->name('EditStatus');

Route::post('/vendor',[vendorController::class,'CreateJasa'])->name('nambahjasa');
Route::post('/vendor/login',[vendorController::class,'vendorlogin'])->name('vendorlog');
Route::post('/vendor/asik',[vendorController::class,'vendorregister'])->name('vendorregis');