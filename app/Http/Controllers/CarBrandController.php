<?php

namespace App\Http\Controllers;

use App\CarBrand;
use Illuminate\Http\Request;

class CarBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=CarBrand::all();
        // dd($models);
        return view('Backend.car_brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.car_brands.create');
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
        CarBrand::create($data);
        return redirect()->route('car_brands.index')->with('message','Data has been inserted successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\CarBrand  $carBrand
     * @return \Illuminate\Http\Response
     */
    public function show(CarBrand $carBrand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CarBrand  $carBrand
     * @return \Illuminate\Http\Response
     */
    public function edit(CarBrand $carBrand)
    {
        return view('Backend.car_brands.edit',compact('carBrand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CarBrand  $carBrand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarBrand $carBrand)
    {
        try{
            $updateData=$request->all();
            //dd($updateData);
            $carBrand->update($updateData);
            return redirect()->route('car_brands.index')->with('message', 'Data has been updated successfully');
        }
        catch(QueryException $e){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CarBrand  $carBrand
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarBrand $carBrand)
    {
        $carBrand->delete();
        return redirect()->route('car_brands.index')->with('message','Data has been inserted successfully');
    }
}
