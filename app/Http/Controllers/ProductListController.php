<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::pluck('title', 'id');
        $names=Product::pluck('name', 'id');
        $products = Product::latest()->get();
        
        //dd($cars);
        return view('Frontend.shop', compact('categories', 'products','names'));
    }

    public function shopByCategory(Request $request)
    {
        //dd($request);
         $categories = Category::pluck('title', 'id');
        //$products = Product::latest()->get();
        $names=Product::pluck('name','name');
//
        $products= Product::where('category_id', $request->category_id)->get();
        //dd($products);
       return view('Frontend.shop', compact('categories','products', 'shop','names'));
    }
}
