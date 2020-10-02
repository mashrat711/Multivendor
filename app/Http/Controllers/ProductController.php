<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return view('Backend.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::pluck('title', 'id');
        $brands=Brand::pluck('title', 'id');
        return view('Backend.products.create',compact('brands','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {
            if($request->hasFile('image_path')){
                $data=$request->all();

                $pictureName=time().'_'.$request->image_path->getClientOriginalName();
                //$request->photo->move('images/student' , $photo);
                $request->image_path->move('images' , $pictureName);
                $data['image_path'] = $pictureName;

                Product::create($data);
                //dd($student_data);///
                return redirect()->route('products.index')->with('message','Data has been inserted successfully');

            }
            else{
                $data=$request->all();
                $data['image_path']="picture didn't add";
                Autos::create($data);
                return redirect()->route('products.index')->with('message','Data has been inserted successfully');
            }

        }
        catch(QueryException $e){
            return redirect()->route('products.create')->with($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('Backend.products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('message','Data has been inserted successfully');

    }
}
