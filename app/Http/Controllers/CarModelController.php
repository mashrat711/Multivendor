<?php

namespace App\Http\Controllers;

use App\Car_model;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models=Car_model::with('carBrand','carGallery')->get();
      // dd($models);
        return view('Backend.car_models.index',compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.car_models.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        Car_model::create($data);
        return redirect()->route('car_models.index')->with('message','Data has been inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car_model  $car_model
     * @return \Illuminate\Http\Response
     */
    public function show(Car_model $car_model)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car_model  $car_model
     * @return \Illuminate\Http\Response
     */
    public function edit(Car_model $car_model)
    {
        return view('Backend.car_models.edit',compact('car_model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car_model  $car_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car_model $car_model)
    {
        try{
            $updateData=$request->all();
            //dd($updateData);
            $car_model->update($updateData);
            return redirect()->route('car_models.index')->with('message', 'Data has been updated successfully');
        }
        catch(QueryException $e){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car_model  $car_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car_model $car_model)
    {
        $car_model->delete();
        return redirect()->route('car_models.index')->with('message', 'Data has been deleted successfully');

    }
}
