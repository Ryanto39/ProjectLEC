@extends('template.master')

<style>
.content{
    display: flex;
    justify-content: right;
    color: white;
}

</style>

@section('title', 'Home')

@section('content')
    <div class="d-flex justify-content-end" style="background-image: url(/asset/Home.png); width: 100%; height: 100%; background-repeat: no-repeat; background-size: 100% 100%; border-top: 15px solid #B0D133;">
        <div class="d-flex flex-column mt-5 me-5">
            <div class="text-wrap text-center fs-1 fst-italic" style="width: 30rem; color: white; font-family: 'Inter', sans-serif; text-shadow: 2px 2px 4px #000000;">
                <p>FIND WHAT <em class="fst-normal" style="color:#B0D133; font-family: 'Inknut Antiqua', serif;">SERVICES</em> YOU NEED TO BE DONE BY</p>
            </div>
            <form class="d-flex justify-content-center mt-5">
                <input class="rounded-start p-2 w-100" style="font-family: 'Inter', sans-serif;" type="search" placeholder="What IT service you looking for?" aria-label="Search">
                <button class="rounded-end p-2" style="background-color: #B0D133" type="submit">
                    <img src="/asset/Search.png" width="25px" height="25px" alt="">
                </button>
            </form>
            <div class="">
                Popular Searches
            </div>
            <div class="">
                Slogan
            </div>
        </div>

        {{-- <div style="background-image: url(/asset/Wave.png); width: 100vw; height: 100vh; background-repeat: no-repeat; background-size: cover;">

        </div> --}}
    </div>
    {{-- <div style="background-image: url(/asset/Wave.png); width:100vw; height: 100vh; background-repeat: no-repeat; background-size: cover; position: relative; z-index: 1">
    </div> --}}
@endsection
