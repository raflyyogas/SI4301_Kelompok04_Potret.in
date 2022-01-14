<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\vendor;
use App\Models\jasa;
use App\Models\transaksi;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Concerns\InteractsWithInput::post;

class customerController extends Controller
{

    // public function index(){}

    public function login(Request $request){
        $username = $request->post('username');
        $password = $request->post('password');
        $data = customer::where('username',$username)->first();
        
        if($password == $data->password){
            session(['login' => true]);
            session(['id' => $data -> id]);
            return redirect('/')->with('success','Berhasil Login!');
        }else{
            return redirect('/login')->with('failed','Email atau Password salah!');
        }
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/')->with('logout','Berhasil Logout');
    }

    public function loginpage(){
        return view('login');
    }

    public function registerpage(){
        return view('register');
    }

    public function register(Request $request){
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

    // public function edit($id){
    //     $cust = customer::find($id);
    //     return view('user.profile',compact('cust'));
    // }

    public function update(Request $request){
        $id = $request->id;
        // $cust = customer::where('id',$id)->first();
        customer::find($id)->update([
            'nama'=> $request->name,
            'username'=> $request->username,
            'email'=> $request->email,
            'noHp'=> $request->nomor,
            'alamat'=> $request->alamat,
            'password'=>$request->password,
        ]);
        return redirect('/profile')->with('BerhasilUpdate','Berhasil Update');
    }
    public function choosevendor($cust,$jasa){
        $cust = customer::where('id',$cust)->first();
        $jasa = jasa::find($jasa);
        return view('choose',compact('cust','jasa'));
    }
    public function CreateTransaction(Request $request){
        transaksi::create([
            'idCust'=>$request->customer,
            'idJasa'=>$request->jasa,
            'status'=>$request->status,
        ]);
    }
}