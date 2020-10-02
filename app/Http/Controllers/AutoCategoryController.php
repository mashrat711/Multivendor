<?php

namespace App\Http\Controllers;

use App\AutoCategory;
use Illuminate\Http\Request;

class AutoCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos=AutoCategory::all();
        //dd($autoCategories);
        return view('Backend.Autos.autoCategories.index',compact('autos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Autos.autoCategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        AutoCategory::create($data);
        return redirect()->route('autoCategories.index')->with('message','Data has been inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AutoCategory  $autoCategory
     * @return \Illuminate\Http\Response
     */
    public function show(AutoCategory $autoCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AutoCategory  $autoCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(AutoCategory $autoCategory)
    {
       // dd($autoCategory);
        return view('Backend.Autos.autoCategories.edit',compact('autoCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AutoCategory  $autoCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AutoCategory $autoCategory)
    {
        try{
            $updateData=$request->all();
            //dd($updateData);
            $autoCategory->update($updateData);
            return redirect()->route('autoCategories.index')->with('message', 'Data has been updated successfully');
        }
        catch(QueryException $e){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AutoCategory  $autoCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(AutoCategory $autoCategory)
    {
        $autoCategory->delete();
        return redirect()->route('autoCategories.index')->with('message','Data has been inserted successfully');
    }
}
