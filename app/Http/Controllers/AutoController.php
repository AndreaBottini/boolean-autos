<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auto;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos =Auto::all();
        // dd($autos);

        return view('autos.index', compact('autos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('autos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();

        $request->validate([
            'producer' => 'required|string|max:60',
            'model' => 'required|string|max:50',
            'img' => 'required',
            'price' => 'required|numeric|min:1|max:99999',
            'description' => 'required|string'
            ]);

        $newAuto = New Auto;
        // $newAuto->producer = $data['producer'];
        // $newAuto->model = $data['model'];
        // $newAuto->img = $data['img'];
        // $newAuto->price = $data['price'];
        // $newAuto->description = $data['description'];
        $newAuto->fill($data);
        $saved = $newAuto->save();

        if($saved == true) {
            return redirect()->route('autos.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
