@extends('template.master')

@section('title', 'About Us')

@section('content')
    <div class="d-flex align-items-center justify-content-center" style="background-image: url(/asset/AboutUs.png); width: 100vw; height: 100vh; background-repeat: no-repeat; background-size: cover;">
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
    </div>
@endsection
