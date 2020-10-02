<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cities=City::pluck('name','id');
        $cartCollection = \Cart::getContent();
        $data = \Cart::getContent();
        return view('/checkout',compact('cities','cartCollection','data'));
    }
}
