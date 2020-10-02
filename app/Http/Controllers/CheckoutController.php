<?php

namespace App\Http\Controllers;

use App\Billing;
use App\Checkout;
use App\City;
use App\Purchase;
//use App\Shipping;
use App\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{

    public function __construct()
    {
        $this->middleware('verified');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities=City::pluck('name','id');
        $cartCollection = \Cart::getContent();
        return view('checkout', [
            'cartCollection' => $cartCollection,
            'cities'=>$cities
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities=City::pluck('name','id');
        $cartCollection = \Cart::getContent();
        return view('checkout',compact('cities','cartCollection'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cartCollection = \Cart::getContent();
        //dd($cartCollection);

        $shipping=Shipping::create([

       
       'first_name'=>$request->first_name,
        'last_name'=>$request->last_name,
        'company_name'=>$request->company_name,
       'address'=>$request->address,
       'email'=>$request->email,
       'phone'=>$request->phone,
       'city_id'=>$request->city_id,
      ]);

        $billing=Billing::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'company_name'=>$request->company_name,
            'address'=>$request->address,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'city_id'=>$request->city_id,
        ]);
        $purchase=Purchase::create(
            [
                'billing_id'=>$billing->id,
                'shipping_id'=>$shipping->id,
                'user_id'=>Auth::id(),
                'product_id'=>$request->product_id,
                'price'=>$request->price,
                'quantity'=>$request->quantity,
            ]
        );
        return redirect('/payment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}
