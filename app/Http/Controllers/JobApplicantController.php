<?php

namespace App\Http\Controllers;

use App\JobApplicant;
use App\JobPost;
use Illuminate\Http\Request;

class JobApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs=JobApplicant::all();
        return view('Backend.Job.jobApplicants.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $job_ids=JobPost::pluck('title','id');
        return view('Backend.Job.jobApplicants.create',compact('job_ids'));
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
            if($request->hasFile('cv')){
                $data=$request->all();

                $pictureName=time().'_'.$request->cv->getClientOriginalName();
                //$request->photo->move('images/student' , $photo);
                $request->cv->move('images/Job' , $pictureName);
                $data['cv'] = $pictureName;

                JobApplicant::create($data);
                //dd($student_data);///
                return redirect()->route('jobApplicants.index')->with('message','Data has been inserted successfully');

            }
            else{
                $data=$request->all();
                $data['cv']="picture didn't add";
                Autos::create($data);
                return redirect()->route('jobApplicants.index')->with('message','Data has been inserted successfully');
            }

        }
        catch(QueryException $e){
            return redirect()->route('jobApplicants.create')->with($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobApplicant  $jobApplicant
     * @return \Illuminate\Http\Response
     */
    public function show(JobApplicant $jobApplicant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobApplicant  $jobApplicant
     * @return \Illuminate\Http\Response
     */
    public function edit(JobApplicant $jobApplicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobApplicant  $jobApplicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobApplicant $jobApplicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobApplicant  $jobApplicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobApplicant $jobApplicant)
    {
        $jobApplicant->delete();
        return redirect()->route('jobApplicants.index')->with('message', 'Data has been deleted successfully');
    }
}
