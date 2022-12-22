@extends('template.master')

@section('title', 'Request Job')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="">
    <div class="container w-50 pt-5 pb-5" style="">
        <div class="bg-light p-5 rounded mt-3 mb-3">
            <h1 class="mb-3 text-center">Request Job</h1>
            <form action="{{ route('request') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Job Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Job Description</label>
                    <textarea type="text" class="form-control" id="description" name="description" aria-describedby="descriptionHelp"></textarea>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Job Category</label>
                    <select class="form-select" id="category" name="category" aria-label="Default select example">
                    <?php $categories = DB::table('categories')->get(); ?>
                      <option selected>Job Category</option>
                        @foreach ($categories as $category)
                          <option value="{{$category->id}}"> {{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Job Price</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="teamCount" class="form-label">Job Team Count</label>
                    <input type="text" class="form-control" id="teamCount" name="teamCount">
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label for="jobImage" class="form-label">Job Image</label>
                    <input type="file" class ="form-control" id="jobImage" name="jobImage">
                </div>
                <div class="mb-2 form-check d-flex justify-content-start gap-2">
                    <input class="form-check-input" type="checkbox" name="terms" value="0" id="terms">
                    <label class="form-check-label" for="terms">
                      I agree to the terms & conditions
                    </label>
                </div>
                <div class="mb-2">
                    @if($errors->any())
                    <p class="text-danger">{{ $errors->first() }}</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Request</button>
            </form>
        </div>
    </div>
</div>


@endsection
