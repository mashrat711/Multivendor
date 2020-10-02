<?php

namespace App\Http\Controllers;

use App\Car_pricelist;
use Illuminate\Http\Request;

class CarPricelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models=Car_pricelist::all();
        return view('Backend.car_specifications.index',compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car_pricelist  $car_pricelist
     * @return \Illuminate\Http\Response
     */
    public function show(Car_pricelist $car_pricelist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car_pricelist  $car_pricelist
     * @return \Illuminate\Http\Response
     */
    public function edit(Car_pricelist $car_pricelist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car_pricelist  $car_pricelist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car_pricelist $car_pricelist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car_pricelist  $car_pricelist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car_pricelist $car_pricelist)
    {
        //
    }
}
