<?php

namespace App\Http\Controllers;

use App\Car_specification;
use App\Product;
use App\Property;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $cars = Car_specification::latest()->limit(4)->get();
        $products = Product::latest()->limit(4)->get();
        $lists =Property::latest()->limit(4)->get();
        return view('index',compact('cars','products','lists'));
    }
}
