<?php

namespace App\Http\Controllers;

use App\Location;
use App\Property;
use Illuminate\Http\Request;

class PropertyListController extends Controller
{
    public function index(){
        $property_types=Property::pluck('property_type','id');
        $locations=Location::pluck('location','id');
        $lists =Property::latest()->get();
        //dd($autos);
        return view('Frontend/Real-state/listing',compact('lists','locations','property_types'));
    }
    public function propertyFiltering(Request $request)
    {
        $property_types=Property::pluck('property_type','property_type');
        //dd($property_types);

       $locations=Location::pluck('location','id');
       $lists = Property::where('property_type',$request->property_type)->where('location_id', $request->location_id)->get();
       //dd($request->all());
        return view('Frontend/Real-state/listing',compact('lists','property','locations','property_types'));
    }
}
