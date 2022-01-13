<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vendor;
use App\Models\jasa;

class vendorController extends Controller
{
    public function index(){
        return view('vendor.index');
    }
    public function registerpage(){
        return view('vendor.register');
    }
    public function loginpage(){
        return view('vendor.login');
    }
    public function vendorregister(Request $request){
        if ($request->password == $request->confpw ){
            vendor::create([
                'namaVendor'=>$request->nama,
                'noHp'=>$request->handphone,
                'email'=>$request->email,
                'password'=>$request->password,
            ]);
            return redirect('/vendor/login')->with('BerhasilRegist','Berhasil Registrasi');
        }else{
            return redirect('/vendor/asik')->with('Failure','Gagal Registrasi');
        }
    }

    public function vendorlogin(Request $request){
        $email = $request->post('email');
        $password = $request->post('password');
        $data = vendor::where('email',$email)->first();
        
        if($password == $data->password){
            session(['vendor' => true]);
            session(['vendorid' => $data -> id]);
            return redirect('/vendor')->with('success','Berhasil Login!');
        }else{
            return redirect('/vendor/login')->with('failed','Email atau Password salah!');
        }
    }
    public function jasa($id){

    }
}
