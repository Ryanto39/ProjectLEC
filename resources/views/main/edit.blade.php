@extends('template.master')

@section('title', 'Categories')

@section('content')
<div class="d-flex" style="padding: 0 20px 50px 35px">
    <div class="container w-50 pt-5 pb-5">
        <div class="d-flex flex-column ms-3">
            <form action="/editConfirm/{{$editView->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="bg-light p-5 rounded mt-3 mb-3">
                    <h1 class="mb-3 text-center">Update Data</h1>
                    <div>
                        <div class="mb-3 d-flex flex-column">
                            <label for="job_image" class="form-label">Job Image</label>
                            <input type="file" class ="form-control" id="job_image" name="job_image">
                        </div>
                        <div class="mb-3">
                            <label for="job_name" class="form-label">Job Name</label>
                            <input type="text" class="form-control" value="{{ old('job_name', $editView->job_name) }} " id="job_name" name="job_name"  placeholder="Update job name...">
                        </div>
                        <div class="mb-3">
                            <label for="job_description" class="form-label">Job Description</label>
                            <textarea type="text" class="form-control" id="job_description" name="job_description" aria-describedby="descriptionHelp" placeholder="Update job description...">{{ old('job_description', $editView->job_description) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="job_price" class="form-label">Job Price</label>
                            <input type="text" class="form-control" value="{{ old('job_price', $editView->job_price) }}" id="job_price" name="job_price" placeholder="Update job price...">
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
