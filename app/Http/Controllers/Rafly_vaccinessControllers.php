<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vaccines;

class Rafly_vaccinessControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaccine = vaccines::orderBy('id','desc')->get(); 
        return view('vaccine.Rafly_vaccine',compact('vaccine'),[
            "title" => "Vaccine"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vaccine.Rafly_create',[
            "title" => "Vaccine"
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
        $imgName = $request->img_path->getClientOriginalName() . '-' . time()
        . '.' . $request->img_path->extension();
        $request->img_path->move(public_path('images'),$imgName);

        vaccines::create([
            'name' => $request -> name,
            'price' => $request -> price,
            'description' => $request -> description,
            'image' =>$imgName
        ]);

        return redirect('/vaccine');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vaccine = vaccines::find($id);
        return view('vaccine.Rafly_edit',compact('vaccine'),[
            "title" => "Vaccine"
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
        $vaccine = vaccines::find($id);
        $imgName = $vaccine->img_path;
        if ($request->img_path){
            $imgName = $request->img_path->getClientOriginalName() . '-' . time()
                    . '.' . $request->img_path->extension();
            $request->img_path->move(public_path('image'),$imgName);
        }

        vaccines::find($id)->update([
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
        vaccines::find($id)->delete();
        return redirect('/vaccine');
    }
}
