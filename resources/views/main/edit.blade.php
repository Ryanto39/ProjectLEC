@extends('template.master')

@section('title', 'Categories')

@section('content')
<div class="d-flex" style="padding: 0 20px 50px 35px">
    <div class="d-flex flex-column ms-3">
        <form action="/editConfirm" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <div class="" style="margin-top: 10px; margin-right:20px; border-bottom: 2px solid black; text-shadow: 0px 4px 4px #777777;">
                    <h2 class="fw-bold">Update Data</h2>
                </div>
                <div class="" style="margin-top: 10px; margin-right:20px; border-bottom: 2px solid black; text-shadow: 0px 4px 4px #777777;">
                    <h5 class="fw-bold">Insert Image</h5>
                    <input type="file" name="job_image">
                </div>
                <div class="" style="margin-top: 10px; margin-right:20px; border-bottom: 2px solid black; text-shadow: 0px 4px 4px #777777;">
                    <h5 class="fw-bold">Update Job Name</h5>
                    <input type="text" class="form-control" name="job_name" value="{{ old('job_name', $editView->job_name) }}" placeholder="Update job name...">
                </div>
                <div class="" style="margin-top: 10px; margin-right:20px; border-bottom: 2px solid black; text-shadow: 0px 4px 4px #777777;">
                    <h5 class="fw-bold">Update Job Description</h5>
                    <textarea type="text" class="form-control" name="job_description" placeholder="Update job description...">{{ old('job_description', $editView->job_description) }}</textarea>
                </div>
                <div class="" style="margin-top: 10px; margin-right:20px; border-bottom: 2px solid black; text-shadow: 0px 4px 4px #777777;">
                    <h5 class="fw-bold">Update Job Price</h5>
                    <input type="text" class="form-control" name="job_price" value="{{ old('job_price', $editView->job_price) }}" placeholder="Update job price...">
                </div>
                {{-- <div class="" style="margin-top: 10px; margin-right:20px; border-bottom: 2px solid black; text-shadow: 0px 4px 4px #777777;">
                    <p>{{$editView->job_description}}</p>
                </div>
                <div class="fst-italic fw-bold" style="margin-top: 10px; margin-right:20px; border-bottom: 2px solid black">
                    <h3>${{$editView->job_price}}</h3>
                </div>
                <div class="d-flex align-items-center">
                    <img class="teamhandler fst-italic fw-bold m-0" src="/asset/TeamHandler.png" style="margin-top:10px; width:40px; height:40px" alt="">
                    <h5 class="m-0 ms-2">Team Handler</h5> <hr style="color:#000000; width: 80px; margin: 0 20px"> <h5 class="fw-bold fst-italic m-0" style="color: #777777; text-shadow: 1px 2px 5px #777777;">Jorytang Dafi Team</h5>
                </div>
                <div class="border border-primary p-1 rounded border border-3" style="width: 700px">
                    <div class="d-flex align-items-center">
                        <img class="teamhandler fst-italic fw-bold m-0" src="/asset/TeamLeader.png" style="margin-top:10px; width:20px; height:auto" alt="">
                        <h5 class="m-0 ms-2">Team Leader</h5> <hr style="color:#000000; width: 80px; margin: 0 20px"> <h5 class="fw-bold fst-italic m-0" style="color: #777777; text-shadow: 1px 2px 5px #777777;">{{$editView->user->user_name}}</h5>
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="teamhandler fst-italic fw-bold m-0" src="/asset/Achievements.png" style="margin-top:10px; width:20px; height:auto" alt="">
                        <h5 class="m-0 ms-2">Achievements</h5> <hr style="color:#000000; width: 80px; margin: 0 20px"> <h5 class="fw-bold fst-italic m-0" style="color: #777777; text-shadow: 1px 2px 5px #777777;">Tokopedia Lead Web Developer (2015-2022), Xiaomi Senior Web Developer (2010-2015)</h5>
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="teamhandler fst-italic fw-bold m-0" src="/asset/TeamCounts.png" style="margin-top:10px; width:20px; height:auto" alt="">
                        <h5 class="m-0 ms-2">Team Counts</h5> <hr style="color:#000000; width: 80px; margin: 0 20px"> <h5 class="fw-bold fst-italic m-0" style="color: #777777; text-shadow: 1px 2px 5px #777777;">6</h5>
                    </div>
                </div>
                <div class="w-75 d-flex justify-content-evenly">
                    <a class="btn btn-dark fw-bold" style="background-color: #008BD9; margin-top:10px; text-color: white" href="#" role="button">Update</a>
                    <a class="btn btn-dark fw-bold" style="background-color: #FF4343; margin-top:10px; text-color: white" href="#" role="button">Delete</a>
                </div> --}}
                <a class="btn btn-dark fw-bold" style="background-color: #008BD9; margin-top:10px; text-color: white" href="/editConfirm" role="button">Update</a>
            </div>
        </form>
    </div>

</div>
@endsection
