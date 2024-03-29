<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $data = request()->validate([
            'job_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'job_name' => 'required',
            'job_description' => 'required',
            'job_price' => 'required'
        ]);

        $updateData = [
            'job_name' => $data['job_name'],
            'job_description' => $data['job_description'],
            'job_price' => $data['job_price']
        ];
        if(request('job_image')){
            $images = $request->job_image->getClientOriginalName();
            $file = request('job_image')->move('asset', $images);
            $updateData['job_image'] = $file;
        }
        $job->update($updateData);
        return redirect('view/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Job::where('id', '=', $id)->delete();
        return view("main.home");
    }

    public function hired($id){
        $job = Job::find($id);
        $job->job_status = 'occupied';
        $job->save();
        return view('main.hired');
    }

    public function unoccupy($id){
        $job = Job::find($id);
        $job->job_status = 'unoccupied';
        $job->save();
        return redirect()->back();
    }

    public function index_request(){
        return view('main.request');
    }

    public function request(Request $request){
        $request->validate([
            'job_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'teamCount' => 'required',
            'category' => 'required',
            'terms' => 'required'
        ]);
        $newJob = new Job();
        $newJob->job_name = $request->input('name');
        $newJob->user_id = Auth::user()->id;
        $newJob->category_id = $request->input('category');
        $newJob->job_description = $request->input('description');
        $newJob->job_price = $request->input('price');
        $newJob->job_teamCount = $request->input('teamCount');
        $images = $request->job_image->getClientOriginalName();
        $file = request('job_image')->move('asset', $images);
        $newJob->job_image = $images;
        $newJob->job_status = 'unapproved';
        $newJob->save();

        return redirect('/');
    }

    public function jobList(){
        $jobs = Job::where('job_status', 'LIKE', 'unapproved')->get();
        $occupiedJobs = Job::where('job_status', 'LIKE', 'occupied')->get();
        return view('main.approve',compact('jobs', 'occupiedJobs'));
    }

    public function approve($id){
        $job = Job::find($id);
        $job->job_status = 'unoccupied';
        $job->save();
        return redirect()->back();
    }

    public function decline($id){
        Job::where('id', '=' , $id)->delete();

        return redirect()->back();
    }

}
