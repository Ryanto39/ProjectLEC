<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($jobId)
    {
        $jobView = Job::findorFail($jobId);
        return view('main.job', ['jobView' => $jobView]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return view('main.home');
        $job = Job::findOrFail($id);
        return view('main.edit', ['editView' => $job]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job = Job::find($id);
        $this->validate($request, [
            'job_image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'job_name' => 'required',
            'job_description' => 'required',
            'job_price' => 'required'
        ]);

        // if ($request->hasFile('job_image')) {
            // $image = $request->file('job_image');
            // $image->storeAs('public/asset', $image->hashName());
            // Storage::delete('public/asset/'.$job->image);
            $job->job_name = $request->job_name;
            $job->job_description = $request->job_description;
            $job->job_price = $request->job_price;
            $job->job_image = $request->job_image;
            $job->save();
        //     $job->update([
        //         'job_image' => $request->job_image,
        //         'job_name' => $request->job_name,
        //         'job_description' => $request->job_description,
        //         'job_price' => $request->job_price
        //     ]);
        // }

        // else {
        //     $job->update([
        //         'job_name' => $request->job_name,
        //         'job_description' => $request->job_description,
        //         'job_price' => $request->job_price
        //     ]);
        // }

        return view("main.home");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
