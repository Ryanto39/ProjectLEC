@extends('template.master')

@section('title', 'Categories')

@section('content')
<div class="d-flex w-50 justify-content-evenly align-items-center">
    <div class="text-wrap fs-1 fst-italic" style="color: #0066A6; font-family: 'Inter', sans-serif; text-shadow: 2px 2px 4px #000000;">
        <p class="m-0">WEB DEVELOPING</p>
    </div>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Change Category
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#">Web Developing</a></li>
          <li><a class="dropdown-item" href="#">App Developing</a></li>
          <li><a class="dropdown-item" href="#">Server Developing</a></li>
        </ul>
    </div>
</div>
<div class="d-flex">
    <div class="">
        <img class="border border-primary p-1 rounded" style="width: 550px" src="/asset/WebDesign.png" alt="">
    </div>
    <div class="d-flex flex-column ms-3">
        <div class="d-flex align-items-center"style=" height: 35px">
            <img class="clocks" src="/asset/Clock.png" style="margin-top:5px; width:30px; height:30px" alt="">
            <p class="m-0">1 - 2 Weeks</p>
        </div>
        <div class="" style="margin-top: 10px; margin-right:20px; border-bottom: 2px solid black; text-shadow: 0px 4px 4px #777777;">
            <h2 class="fw-bold">Web Design</h2>
        </div>
        <div class="" style="margin-top: 10px; margin-right:20px; border-bottom: 2px solid black; text-shadow: 0px 4px 4px #777777;">
            <p>Web design encompasses many different skills and disciplines in the production and maintenance of websites. The different areas of web design include web graphic design; user interface design (UI design); authoring, including standardised code and proprietary software; user experience design (UX design); and search engine optimization.</p>
        </div>
        <div class="fst-italic fw-bold" style="margin-top: 10px; margin-right:20px; border-bottom: 2px solid black">
            <h3>$99.00 - $200.00</h3>
        </div>
        <div class="d-flex align-items-center">
            <img class="teamhandler fst-italic fw-bold m-0" src="/asset/TeamHandler.png" style="margin-top:10px; width:40px; height:40px" alt="">
            <h5 class="m-0 ms-2">Team Handler</h5> <hr style="color:#000000; width: 80px; margin: 0 20px"> <h5 class="fw-bold fst-italic m-0" style="color: #777777; text-shadow: 1px 2px 5px #777777;">Jorytang Dafi Team</h5>
        </div>
        <div class="border border-primary p-1 rounded border border-3" style="width: 700px">
            <div class="d-flex align-items-center">
                <img class="teamhandler fst-italic fw-bold m-0" src="/asset/TeamLeader.png" style="margin-top:10px; width:20px; height:auto" alt="">
                <h5 class="m-0 ms-2">Team Leader</h5> <hr style="color:#000000; width: 80px; margin: 0 20px"> <h5 class="fw-bold fst-italic m-0" style="color: #777777; text-shadow: 1px 2px 5px #777777;">Rishi Sunak</h5>
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
            <a class="btn btn-dark fw-bold" style="background-color: #008BD9; text-color: white" href="#" role="button">Update</a>
            <a class="btn btn-dark fw-bold" style="background-color: #FF4343; text-color: white" href="#" role="button">Delete</a>
        </div>
    </div>

</div>
@endsection
