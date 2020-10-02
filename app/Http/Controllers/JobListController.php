<?php

namespace App\Http\Controllers;

use App\JobCategory;
use App\JobPost;
use Illuminate\Http\Request;

class JobListController extends Controller
{
    public function index()
    {
        $categories = JobCategory::pluck('title', 'id');

        $job_posts = JobPost::latest()->get();
        //dd($cars);
        return view('Frontend/Job/listing', compact('categories', 'job_posts'));
    }

    public function jobByCategory(Request $request)
    {
        //dd($request);
        $categories = JobCategory::pluck('title', 'id');

        $job_posts = JobPost::where('job_category_id', $request->job_category_id)->get();
        return view('Frontend/Job/listing', compact('categories', 'job_posts'));
    }
}