<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patients;
use App\Models\vaccines;
use Illuminate\Support\Facades\DB;

class Rafly_patientsControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient = patients::all();
        return view('patient.Rafly_patient',compact('patient'),[
            'title' => 'Patient'
        ]);
    }
    
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show()
    {
        $vaccine = vaccines::orderBy('id','desc')->get(); 
        return view('patient.Rafly_list',compact('vaccine'),[
            'title' => 'Patient'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $vaccine = vaccines::find($id);
        return view('patient.Rafly_create',compact('vaccine'),[
            "title" => "Patient"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Name = $request->img_path->getClientOriginalName() . '-' . time()
        . '.' . $request->img_path->extension();
        $request->img_path->move(public_path('KTPimg'),$Name);

        patients::create([
            'vaccine_id' => $request -> vaksin_id,
            'name' => $request -> name,
            'nik' => $request -> nik,
            'alamat' => $request -> alamat,
            'image_ktp' => $Name,
            'no_hp' => $request -> no_hp,
        ]);

        return redirect('/patient');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = patients::find($id);
        return view('patient.Rafly_edit',compact('patient'),[
            "title" => "Patient"
            //"NamaVaksin" => $vaccine
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patient = patients::find($id);
        $imgName = $patient->img_path;
        if ($request->img_path){
            $imgName = $request->img_path->getClientOriginalName() . '-' . time()
                    . '.' . $request->img_path->extension();
            $request->img_path->move(public_path('image'),$imgName);
        }

        patients::find($id)->update([
            'vaksin_id' => $request -> vaksin_id,
            'name' => $request -> name,
            'price' => $request -> price,
            'description' => $request -> description,
            'image' =>$imgName
        ]);

        return redirect('/vaccine');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        patients::find($id)->delete();
        return redirect('/patient');
    }
}
