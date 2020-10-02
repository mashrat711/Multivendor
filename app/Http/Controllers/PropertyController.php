<?php

namespace App\Http\Controllers;

use App\Location;
use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties=Property::all();
        return view('Backend.Real-State.properties.index',compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations=Location::pluck('location','id');
        return view('Backend.Real-State.properties.create',compact('locations'));
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
                if($request->hasFile('cover_image','image1','image2','image3','video')){
                    $data=$request->all();

                    $pictureName1=time().'_'.$request->cover_image->getClientOriginalName();
                    $pictureName2=time().'_'.$request->image1->getClientOriginalName();
                    $pictureName3=time().'_'.$request->image2->getClientOriginalName();
                    $pictureName4=time().'_'.$request->image3->getClientOriginalName();
                    $pictureName5=time().'_'.$request->video->getClientOriginalName();


                    $request->cover_image->move('images/Real-state' , $pictureName1);
                    $request->image1->move('images/Real-state' , $pictureName2);
                    $request->image2->move('images/Real-state' , $pictureName3);
                    $request->image3->move('images/Real-state' , $pictureName4);
                    $request->video->move('images/Real-state' , $pictureName5);

                    $data['cover_image'] = $pictureName1;
                    $data['image1'] = $pictureName2;
                    $data['image2'] = $pictureName3;
                    $data['image3'] = $pictureName4;
                    $data['video'] = $pictureName5;





                    Property::create($data);
                    //dd($student_data);///
                    return redirect()->route('properties.index')->with('message','Data has been inserted successfully');

                }
                else{
                    $data=$request->all();
                    $data['image1']="picture didn't add";
                    $data['image2']="picture didn't add";
                    Car_gallery::create($data);
                    return redirect()->route('properties.index')->with('message','Data has been inserted successfully');
                }

            }
            catch(QueryException $e){
                return redirect()->route('properties.create')->with($e->getMessage());
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        $pros=Property::pluck('title','id');
        return view('Backend.Real-State.properties.show',compact('property','pros'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        return view('Backend.Real-State.properties.edit',compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        try{
            $updateData=$request->all();
            //dd($updateData);
            $property->update($updateData);
            return redirect()->route('properties.index')->with('message', 'Data has been updated successfully');
        }
        catch(QueryException $e){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->route('properties.index')->with('message','Data has been inserted successfully');
    }
    
}
