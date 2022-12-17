@extends('template.master')

@section('title', 'Categories')

@section('content')
<div class="d-flex w-50 justify-content-evenly align-items-center">
    <div class="text-wrap fs-1 fst-italic" style="color: #0066A6; font-family: 'Inter', sans-serif; text-shadow: 2px 2px 4px #000000;">
        <p class="m-0">{{$jobView->category->category_name}}</p>
    </div>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Change Category
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <?php $categories = DB::table('categories')->get(); ?>
            @foreach ($categories as $category)
            <li><a class="dropdown-item" href="/category/{{$category->id}}">{{$category->category_name}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
<div class="d-flex" style="padding: 0 20px 50px 35px">
    <div class="">
        <img class="border border-primary p-1 rounded" style="width: 550px" src="/{{$jobView->job_image}}" alt="">
    </div>
    <div class="d-flex flex-column ms-3">
        <div class="d-flex align-items-center"style=" height: 35px">
            <img class="clocks" src="/asset/Clock.png" style="margin-top:5px; width:30px; height:30px" alt="">
            <p class="m-0">Discussable</p>
        </div>
        <div class="" style="margin-top: 10px; margin-right:20px; border-bottom: 2px solid black; text-shadow: 0px 4px 4px #777777;">
            <h2 class="fw-bold">{{$jobView->job_name}}</h2>
        </div>
        <div class="" style="margin-top: 10px; margin-right:20px; border-bottom: 2px solid black; text-shadow: 0px 4px 4px #777777;">
            <p>{{$jobView->job_description}}</p>
        </div>
        <div class="fst-italic fw-bold" style="margin-top: 10px; margin-right:20px; border-bottom: 2px solid black">
            <h3>${{$jobView->job_price}}</h3>
        </div>
        <div class="d-flex align-items-center">
            <img class="teamhandler fst-italic fw-bold m-0" src="/asset/TeamHandler.png" style="margin-top:10px; width:40px; height:40px" alt="">
            <h5 class="m-0 ms-2">Team Handler</h5> <hr style="color:#000000; width: 80px; margin: 0 20px"> <h5 class="fw-bold fst-italic m-0" style="color: #777777; text-shadow: 1px 2px 5px #777777;">Jorytang Dafi Team</h5>
        </div>
        <div class="border border-primary p-1 rounded border border-3" style="width: 700px">
            <div class="d-flex align-items-center">
                <img class="teamhandler fst-italic fw-bold m-0" src="/asset/TeamLeader.png" style="margin-top:10px; width:20px; height:auto" alt="">
                <h5 class="m-0 ms-2">Team Leader</h5> <hr style="color:#000000; width: 80px; margin: 0 20px"> <h5 class="fw-bold fst-italic m-0" style="color: #777777; text-shadow: 1px 2px 5px #777777;">{{$jobView->user->user_name}}</h5>
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
            <a class="btn btn-dark fw-bold" style="background-color: #008BD9; margin-top:10px; text-color: white" href="" role="button">Hire Now</a>
        </div>
    </div>

</div>
@endsection
