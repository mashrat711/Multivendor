<?php

namespace App\Http\Controllers;

use App\AutoCategory;
use App\Autos;
use Illuminate\Http\Request;

class AutolistController extends Controller
{
    public function index()
    {

        $autos = Autos::latest()->get();
        $categories = AutoCategory::with('autoCat')->latest()->get();

//dd($categories);
        return view('Frontend/Car/car parts', compact('autos', 'categories'));
    }
}
