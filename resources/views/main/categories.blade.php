@extends('template.master')

@section('title', 'Categories')
@section('nav_categories', 'Nav')

<style>

.btn-light:hover{
    background-color: #0d6efd !important;
    color: white !important;
}

</style>

@section('content')
@if (!Auth::check())
<div class="d-flex align-items-center justify-content-evenly w-100">
    <div class="text-wrap fs-1 fst-italic" style="color: #0066A6; font-family: 'Inter', sans-serif; text-shadow: 2px 2px 4px #000000;">
        <p class="m-0 text-uppercase">SERVICES</p>
    </div>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            {{$categoryData->category_name}}
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <?php $categories = DB::table('categories')->get(); ?>
            @foreach ($categories as $category)
            <li><a class="dropdown-item" href="/category/{{$category->id}}">{{$category->category_name}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
@elseif (Auth::user()->user_role == 'Member')
<div class="d-flex align-items-center justify-content-evenly w-100">
    <div class="">
        <a class="btn btn-success" href="/request">+ Request Job</a>
    </div>
    <div class="text-wrap fs-1 fst-italic" style="color: #0066A6; font-family: 'Inter', sans-serif; text-shadow: 2px 2px 4px #000000;">
        <p class="m-0 text-uppercase">SERVICES</p>
    </div>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            {{$categoryData->category_name}}
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <?php $categories = DB::table('categories')->get(); ?>
            @foreach ($categories as $category)
            <li><a class="dropdown-item" href="/category/{{$category->id}}">{{$category->category_name}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
@elseif (Auth::user()->user_role == 'Admin')
<div class="d-flex align-items-center justify-content-evenly w-100">
    <div class="">
        <a class="btn btn-success" href="/approve">Approve Job</a>
    </div>
    <div class="text-wrap fs-1 fst-italic" style="color: #0066A6; font-family: 'Inter', sans-serif; text-shadow: 2px 2px 4px #000000;">
        <p class="m-0 text-uppercase">SERVICES</p>
    </div>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            {{$categoryData->category_name}}
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <?php $categories = DB::table('categories')->get(); ?>
            @foreach ($categories as $category)
            <li><a class="dropdown-item" href="/category/{{$category->id}}">{{$category->category_name}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
@endif
<div class="bg" style="background-image: linear-gradient(135deg, #C479FF, white, #59FFAF); width: 100%; height: auto;">
    <div class="container p-3">
        <div class="d-flex">
            @foreach ($categoryData->job as $job)
            @if ($job->job_status == 'unoccupied')
            <div class="card m-3" style="width: 18rem;">
                <img src="/{{$job->job_image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="d-flex flex-column">
                        <h5 class="card-title fw-bold">{{$job->job_name}}</h5>
                        <p class="card-text">${{$job->job_price}}</p>

                        <div class= "d-flex align-items-center justify-content-between">
                            <div class="">
                                <p class="m-0 fw-bold">Team Handler</p>
                                <p class="m-0 fw-bold fst-italic" style="color: #777777">{{$job->user->user_name}}</p>
                            </div>
                            <a href="/view/{{$job->id}}" class="btn btn-light border border-primary" style="text-color: black; padding: 5px 25px" >View</a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>
@endsection
