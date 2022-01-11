<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class registercontroller extends Controller
{
    
    public function index() {
        return view('register');   
    }
    public function store(Request $request) {
        if ($request->password == $request->confpw ){
            customer::create([
                'username'=>$request->username,
                'password'=>$request->password,
                'email'=>$request->email,
                'nama'=>$request->name,
                'noHp'=>$request->noHp,
                'alamat'=>$request->alamat,
            ]);
            return redirect('/login')->with('BerhasilRegist','Berhasil Registrasi');
        }else{
            return redirect('/register')->with('TidakSama','Password tidak sama');
        }
    }
}
