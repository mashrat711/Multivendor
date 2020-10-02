<?php

namespace App\Http\Controllers;

use App\JobCategory;
use App\JobPost;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=JobPost::all();
        return view('Backend.Job.jobPosts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $job_categories=JobCategory::pluck('title','id');
        return view('Backend.Job.jobPosts.create',compact('job_categories'));
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
        JobPost::create($data);
        return redirect()->route('jobPosts.index')->with('message','Data has been inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function show(JobPost $jobPost)
    {
        return view('Backend.Job.jobPosts.show',compact('jobPost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function edit(JobPost $jobPost)
    {
        return view('Backend.Job.jobPosts.edit',compact('jobPost'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobPost $jobPost)
    {
        try{
            $updateData=$request->all();
            //dd($updateData);
            $jobPost->update($updateData);
            return redirect()->route('jobPosts.index')->with('message', 'Data has been updated successfully');
        }
        catch(QueryException $e){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobPost $jobPost)
    {
        $jobPost->delete();
        return redirect()->route('jobPosts.index')->with('message', 'Data has been deleted successfully');
    }
}
