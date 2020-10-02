<?php

namespace App\Http\Controllers;

use App\Car_gallery;
use App\Car_model;
use Illuminate\Http\Request;

class CarGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries=Car_gallery::with('carModel')->get();
        //dd($galleries);
        return view('Backend.car_galleries.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carModel = Car_model::pluck('title', 'id');
        return view('Backend.car_galleries.create',compact('carModel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            //dd($request->all());
            try
            {
                if($request->hasFile('image1','image2','image3','image4','image5','image6','image7','image8','image9','image10','image11','image12')){
                    $data=$request->all();

                    $pictureName1=time().'_'.$request->image1->getClientOriginalName();
                    $pictureName2=time().'_'.$request->image2->getClientOriginalName();
                    $pictureName3=time().'_'.$request->image3->getClientOriginalName();
                    $pictureName4=time().'_'.$request->image4->getClientOriginalName();
                    $pictureName5=time().'_'.$request->image5->getClientOriginalName();
                    $pictureName6=time().'_'.$request->image6->getClientOriginalName();
                    $pictureName7=time().'_'.$request->image7->getClientOriginalName();
                    $pictureName8=time().'_'.$request->image8->getClientOriginalName();
                    $pictureName9=time().'_'.$request->image9->getClientOriginalName();
                    $pictureName10=time().'_'.$request->image10->getClientOriginalName();
                    $pictureName11=time().'_'.$request->image11->getClientOriginalName();
                    $pictureName12=time().'_'.$request->image12->getClientOriginalName();

                    $request->image1->move('images/car' , $pictureName1);
                    $request->image2->move('images/car' , $pictureName2);
                    $request->image3->move('images/car' , $pictureName3);
                    $request->image4->move('images/car' , $pictureName4);
                    $request->image5->move('images/car' , $pictureName5);
                    $request->image6->move('images/car' , $pictureName6);
                    $request->image7->move('images/car' , $pictureName7);
                    $request->image8->move('images/car' , $pictureName8);
                    $request->image9->move('images/car' , $pictureName9);
                    $request->image10->move('images/car' , $pictureName10);
                    $request->image11->move('images/car' , $pictureName11);
                    $request->image12->move('images/car' , $pictureName12);
                    $data['image1'] = $pictureName1;
                    $data['image2'] = $pictureName2;
                    $data['image3'] = $pictureName3;
                    $data['image4'] = $pictureName4;
                    $data['image5'] = $pictureName5;
                    $data['image6'] = $pictureName6;
                    $data['image7'] = $pictureName7;
                    $data['image8'] = $pictureName8;
                    $data['image9'] = $pictureName9;
                    $data['image10'] = $pictureName10;
                    $data['image11'] = $pictureName11;
                    $data['image12'] = $pictureName12;




                    Car_gallery::create($data);
                    //dd($student_data);///
                    return redirect()->route('car_galleries.index')->with('message','Data has been inserted successfully');

                }
                else{
                    $data=$request->all();
                    $data['image1']="picture didn't add";
                    $data['image2']="picture didn't add";
                    Car_gallery::create($data);
                    return redirect()->route('car_galleries.index')->with('message','Data has been inserted successfully');
                }

            }
            catch(QueryException $e){
                return redirect()->route('car_galleries.create')->with($e->getMessage());
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car_gallery  $car_gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Car_gallery $car_gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car_gallery  $car_gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Car_gallery $car_gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car_gallery  $car_gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car_gallery $car_gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car_gallery  $car_gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car_gallery $car_gallery)
    {
        //
    }
}
