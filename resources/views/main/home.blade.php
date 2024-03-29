@extends('template.master')

<style>
    .categ img:hover{
        transform: scale(1.1);
        transition: 1s;
    }

    .categ img{
        transition-delay: 1s;
        transition: 2s;
    }

</style>

@section('title', 'Home')
@section('nav_home', 'Nav')

@section('content')

    <div class="d-flex justify-content-end" style="background-image: url(/asset/Home.png); width: 100%; height: 100vh; background-repeat: no-repeat; background-size: cover; border-top: 15px solid #B0D133;">
        <div class="d-flex flex-column mt-5 me-5">
            <div class="text-wrap text-end fs-1 fst-italic" style="width: 30rem; color: white; font-family: 'Inter', sans-serif; text-shadow: 2px 2px 4px #000000;">
                <p>FIND WHAT <em class="fst-normal" style="color:#B0D133; font-family: 'Inknut Antiqua', serif;">SERVICES</em> YOU NEED TO BE DONE <em style="margin-right: 170px">BY</em> </p><img style="position: absolute; width: 150px; right: 50px; top: 285px;" src="/asset/DoneIT.png" alt="">
            </div>
            <div class="d-flex justify-content-center mt-auto">
                {{-- <div class="text-wrap text-center fs-5 fst-italic" style="margin-top: 100px; width: 30rem; color: white; font-family: 'Inter', sans-serif; text-shadow: 2px 2px 4px #000000;">
                    <p>We are committed to provide everything you need about IT services.</p>
                </div> --}}
                <div class="text-wrap text-center fs-5 fst-italic" style="width: 30rem; color: white; font-family: 'Inter', sans-serif; text-shadow: 2px 2px 4px #000000;">
                    <p class="mb-5">We are committed to provide everything you need about IT services.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="categs" class="w-100 d-flex" style="display: flex; background-color: #B0D133; width: 100vw; height: 100vh; flex-direction: column; " id="categ">
        <div class="fs-1 fst-italic d-flex justify-content-center" style="padding: 5px; width: 100%; color: white; font-family: 'Inter', sans-serif; text-shadow: 2px 2px 4px #000000;">
            <p style="font-size: 60px">CATEGORIES</p>
        </div>
        <div class="allcate">
            <div class="d-flex">
                <div class="webdev" style="display: flex; flex-direction: row; justify-content: space-evenly; align-items: center; width: 100%">
                    <a class="categ" href="/category/{{1}}">
                        <img class="border border-2 border-dark" style="height: 70vh; border-radius: 20px; border-color: black" src="/asset/WebDeveloping.png" alt="">
                    </a>
                    <a class="categ" href="/category/{{2}}">
                        <img class="border border-2 border-dark" style="height: 70vh; border-radius: 20px; border-color: black" src="/asset/AppDeveloping.png" alt="">
                    </a>
                    <a class="categ" href="/category/{{3}}">
                        <img class="border border-2 border-dark" style="height: 70vh; border-radius: 20px; border-color: black" src="/asset/ServerDeveloping.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="abouts" class="d-flex align-items-center flex-column justify-content-between" style="background-image: url(/asset/AboutUs.png); width: auto; height: 100vh; background-repeat: no-repeat; background-size: cover;" id="abouts">
        <div class="fs-1 fst-italic d-flex justify-content-center" style="padding: 5px; width: 100%; color: #B0D133; font-family: 'Inter', sans-serif; text-shadow: 2px 2px 4px #ffffff; margin-top: 40px;">
            <p style="font-size: 60px">ABOUT US</p>
        </div>
        <div class="container w-75 d-flex justify-content-center align-items-center">
            <div class="d-flex align-items-center me-5" style="background-color: white; width: 280px; height: 280px; border-radius: 50px">
                    <img class="p-5" width="280px" src="/asset/DoneIT.png" alt="">
            </div>
            <div class="w-100">
                <div>
                    <div>
                        <h1 style="font-family: 'Inter', sans-serif; color: white; text-shadow: 2px 2px 4px #B0D133; font-size: 65px">DoneIT</h1>
                    </div>
                    <div>
                        <p style="font-family: 'Inter', sans-serif; color: white; text-shadow: 2px 2px 4px #8D8D8D;">
                            DoneIT is a global online marketplace for IT services. DoneIT’s platform connects
                            our professional IT services team to people or businesses looking to hire (buyers).
                            Listings on DoneIT are diverse and range from "make Database using FireBase" to
                            "help with HTML, JavaScript, CSS, and jQuery". DoneIT was founded in 2022 by 5
                            students named Jovan, Ryan, Bintang, Daniel and Rafi. </p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            ㅤ
        </div>
    </div>
@endsection
