@extends('template.master')

@section('title', 'Request Job')

@section('content')
@if ($jobs->isEmpty())
<div class="d-flex justify-content-center align-items-center">
    <div class="container w-100 pt-5 pb-5" >
        <div class="bg-light p-5 rounded mt-3 mb-3">
            <h1 class="mb-3 text-center">No Job Needed To Be Approved!</h1>
        </div>
    </div>
</div>
@else
<div class="d-flex justify-content-center align-items-center">
    <div class="container w-100 pt-5 pb-5" >
        <div class="bg-light p-5 rounded mt-3 mb-3">
            <h1 class="mb-3 text-center">Job Approval List</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Job Image</th>
                        <th scope="col">Job Name</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Job Description</th>
                        <th scope="col">Job Price</th>
                        <th scope="col">Job Team Count</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jobs as $job)
                    <tr>
                        <th scope="row">
                            <img src="/asset/{{$job->job_image}}" style="max-width: 150px" alt="">
                        </th>
                        <td>{{$job->job_name}}</td>
                        <td>{{$job->user->user_name}}</td>
                        <td>{{$job->job_description}}</td>
                        <td>{{$job->job_price}}</td>
                        <td>{{$job->job_teamCount}}</td>
                        <td>
                            <a class="btn btn-success" href="/jobApproved/{{$job->id}}" role="button">Approve</a>
                            <a class="btn btn-danger" href="jobDecline/{{$job->id}}" role="button">Decline</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif
@if ($occupiedJobs->isEmpty())
<div class="d-flex justify-content-center align-items-center">
    <div class="container w-100 pt-5 pb-5" >
        <div class="bg-light p-5 rounded mt-3 mb-3">
            <h1 class="mb-3 text-center">No Jobs Are Occupied!</h1>
        </div>
    </div>
</div>
@else
<div class="d-flex justify-content-center align-items-center">
    <div class="container w-100 pt-5 pb-5" >
        <div class="bg-light p-5 rounded mt-3 mb-3">
            <h1 class="mb-3 text-center">Job Occupied List</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Job Image</th>
                        <th scope="col">Job Name</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Job Description</th>
                        <th scope="col">Job Price</th>
                        <th scope="col">Job Team Count</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($occupiedJobs as $job)
                    <tr>
                        <th scope="row">
                            <img src="/asset/{{$job->job_image}}" style="max-width: 150px" alt="">
                        </th>
                        <td>{{$job->job_name}}</td>
                        <td>{{$job->user->user_name}}</td>
                        <td>{{$job->job_description}}</td>
                        <td>{{$job->job_price}}</td>
                        <td>{{$job->job_teamCount}}</td>
                        <td>
                            <a class="btn btn-success" href="/jobUnoccupy/{{$job->id}}" role="button">Unoccupy</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif


@endsection
