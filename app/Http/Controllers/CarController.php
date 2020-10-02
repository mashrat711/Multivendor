<?php

namespace App\Http\Controllers;

use App\Car_model;
use App\Car_specification;
use App\CarBrand;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $carBrand=CarBrand::pluck('title', 'id');
        $carModel = Car_model::pluck('title', 'id');
        $carTypes = ['cub', 'sedan', 'supercar','hatchback' ,'cabriolet'];
        $cars = Car_specification::latest()->get();
        //dd($cars);
        return view('Frontend/Car/car-listing',compact('cars','carBrand','carModel', 'carTypes'));
    }

    public function carType($carType)
    {
       // dd($carType); 
        $carTypes = ['cub', 'sedan', 'supercar','hatchback' ,'cabriolet'];
        $cars = Car_specification::where('type', $carType)->get();

        return view('Frontend/Car/car-listing',compact('cars', 'carTypes'));
    }
    public function carList( Request $request){
        $status = $request->status;
        $brand = CarBrand::where('title', $request->title)->get();
        $model=Car_model::pluck('title', 'id');
        return view('Frontend/Car/car-listing',compact('status', 'brand', 'model'));

    }

    public function carByCategory(Request $request)
    {
        //dd($request);
        $carBrand=CarBrand::pluck('title', 'id');
        $carModel = Car_model::pluck('title', 'id');
        $carTypes = ['cub', 'sedan', 'supercar','hatchback' ,'cabriolet'];
        $cars = Car_specification::where('status',$request->status)->where('car_brand_id', $request->car_brand_id)->where('car_model_id', $request->car_model_id)->get();
        return view('Frontend/Car/car-listing',compact('cars','carBrand','carModel', 'carTypes'));
    }
    
}
