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

@section('content')
    <div class="d-flex justify-content-end" style="background-image: url(/asset/Home.png); width: 100%; height: 100vh; background-repeat: no-repeat; background-size: cover; border-top: 15px solid #B0D133;">
        <div class="d-flex flex-column mt-5 me-5">
            <div class="text-wrap text-center fs-1 fst-italic" style="width: 30rem; color: white; font-family: 'Inter', sans-serif; text-shadow: 2px 2px 4px #000000;">
                <p>FIND WHAT <em class="fst-normal" style="color:#B0D133; font-family: 'Inknut Antiqua', serif;">SERVICES</em> YOU NEED TO BE DONE BY</p><img style="position: absolute; width: 150px; right: 75px; top: 285px;" src="/asset/DoneIT.png" alt="">
            </div>
            <form class="d-flex justify-content-center mt-5">
                <input class="rounded-start p-2 w-100" style="font-family: 'Inter', sans-serif;" type="search" placeholder="What IT service you looking for?" aria-label="Search">
                <button class="rounded-end p-2" style="background-color: #B0D133;" type="submit">
                    <img src="/asset/Search.png" width="25px" height="25px" alt="">
                </button>
            </form>
            <div class="popcontainer" style="display: flex; flex-direction: row;">
                <div class="fst-normal" style="color:#B0D133; font-family: 'Inter', sans-serif; text-shadow: 2px 2px 4px #616060;">
                    POPULAR SEARCH:
                </div>
                <div class="boxes d-flex">
                    <div class="boxs d-flex align-items-center justify-content-center" style="margin-left: 15px; background: rgb(144, 144, 144); border-radius: 30px">
                        <p class="ps-2 pe-2" style="margin: 0; color: #0066A6">IOS app developing</p>
                    </div>
                    <div class="boxs d-flex align-items-center justify-content-center" style="margin-left: 15px; background: rgb(144, 144, 144); border-radius: 30px">
                        <p class="ps-2 pe-2" style="margin: 0; color: #0066A6">NodeJS server developing</p>
                    </div>
                </div>
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
    <div class="w-100 d-flex" style="display: flex; background-color: #B0D133; width: 100vw; height: 100vh; flex-direction: column; ">
        <div class="fs-1 fst-italic d-flex justify-content-center" style="padding: 5px; width: 100%; color: white; font-family: 'Inter', sans-serif; text-shadow: 2px 2px 4px #000000;">
            <p style="font-size: 60px">CATEGORIES</p>
        </div>
        <div class="allcate">
            <div class="d-flex">
                <div class="webdev" style="display: flex; flex-direction: row; justify-content: space-evenly; align-items: center; width: 100%">
                    <a class="categ" href="">
                        <img class="border border-2 border-dark" style="height: 70vh; border-radius: 20px; border-color: black" src="/asset/WebDeveloping.png" alt="">
                    </a>
                    <a class="categ" href="">
                        <img class="border border-2 border-dark" style="height: 70vh; border-radius: 20px; border-color: black" src="/asset/AppDeveloping.png" alt="">
                    </a>
                    <a class="categ" href="">
                        <img class="border border-2 border-dark" style="height: 70vh; border-radius: 20px; border-color: black" src="/asset/ServerDeveloping.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
