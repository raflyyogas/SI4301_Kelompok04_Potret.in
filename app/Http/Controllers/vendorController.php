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

    public function CreateJasa(Request $request){
        $Name = $request->image->getClientOriginalName() . '-' . time()
        . '.' . $request->image->extension();
        $request->image->move(public_path('img/imgvendor'),$Name);

        jasa::create([
            'namaJasa' => $request -> nama,
            'deskripsi' => $request -> deskripsi,
            'gambar' => $Name,
            'harga' => $request -> harga,
            'lokasi' => $Name,
            'idVendor' => $request -> vendor,
            'idKategori' => $request -> kategori,
        ]);

        return redirect('/vendor');
    }

    public function viewJasa($id){
        $jasa = jasa::find($id);
        return view('vendor.view',compact('jasa'));
    }

    public function Vlogout(Request $request){
        $request->session()->flush();
        return redirect('/')->with('logout','Berhasil Logout');
    }
}
