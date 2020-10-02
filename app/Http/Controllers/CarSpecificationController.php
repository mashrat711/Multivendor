<?php

namespace App\Http\Controllers;

use App\Car_model;
use App\Car_specification;
use App\CarBrand;
use Illuminate\Http\Request;

class CarSpecificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars=Car_specification::with('carModel')->get();
        //dd($cars);
        return view('Backend.car_specifications.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carBrand=CarBrand::pluck('title', 'id');
        $carModel = Car_model::pluck('title', 'id');
        return view('Backend.car_specifications.create',compact('carModel','carBrand'));
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
        Car_specification::create($data);
       //dd($data);
        return redirect()->route('car_specifications.index')->with('message','Data has been inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car_specification  $car_specification
     * @return \Illuminate\Http\Response
     */
    public function show(Car_specification $car_specification)
    {
       // dd($car_specification);
        return view('Backend.car_specifications.show',compact('car_specification'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car_specification  $car_specification
     * @return \Illuminate\Http\Response
     */
    public function edit(Car_specification $car_specification)
    {
        $carBrand=CarBrand::pluck('title', 'id');
        $carModel = Car_model::pluck('title', 'id');
        return view('Backend.car_specifications.edit',compact('car_specification','carModel','carBrand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car_specification  $car_specification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car_specification $car_specification)
    {
        try{
            $updateData=$request->all();
            //dd($updateData);
            $car_specification->update($updateData);
            return redirect()->route('car_specifications.index')->with('message', 'Data has been updated successfully');
        }
        catch(QueryException $e){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car_specification  $car_specification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car_specification $car_specification)
    {
        $car_specification->delete();
        return redirect()->route('car_specifications.index')->with('message', 'Data has been updated successfully');

    }
}
