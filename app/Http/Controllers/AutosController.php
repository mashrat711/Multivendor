<?php

namespace App\Http\Controllers;

use App\AutoCategory;
use App\Autos;
use App\Brand;
use Illuminate\Http\Request;

class AutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos=Autos::all();
        return view('Backend.Autos.autos.index',compact('autos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands=Brand::pluck('title', 'id');
        $categories = AutoCategory::pluck('title', 'id');
        return view('Backend.Autos.autos.create',compact('categories','brands'));
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
            if($request->hasFile('image')){
                $data=$request->all();

                $pictureName=time().'_'.$request->image->getClientOriginalName();
                //$request->photo->move('images/student' , $photo);
                $request->image->move('images' , $pictureName);
                $data['image'] = $pictureName;

                Autos::create($data);
                //dd($student_data);///
                return redirect()->route('autos.index')->with('message','Data has been inserted successfully');

            }
            else{
                $data=$request->all();
                $data['image']="picture didn't add";
                Autos::create($data);
                return redirect()->route('autos.index')->with('message','Data has been inserted successfully');
            }

        }
        catch(QueryException $e){
            return redirect()->route('autos.create')->with($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function show(Autos $autos)
    {
        $autos=Autos::all();
        //dd($autos);

        return view('Backend.Autos.autos.show',compact('autos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function edit($autos)
    {
        $categories = AutoCategory::pluck('title', 'id');
        $autos=Autos::all()->where('id', $autos)->first();
        return view('Backend.Autos.autos.edit',compact('categories','autos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $autos)
    {
        try{
            $updateData=$request->all();
            //dd($updateData);
            $autos=Autos::all()->where('id', $autos)->first();
            $autos->update($updateData);
            return redirect()->route('autos.index')->with('message', 'Data has been updated successfully');
        }
        catch(QueryException $e){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function destroy($autos)
    {
        $autos=Autos::all()->where('id', $autos)->first();
        $autos->delete();
        return redirect()->route('autos.index')->with('message','Data has been inserted successfully');
    }
}
