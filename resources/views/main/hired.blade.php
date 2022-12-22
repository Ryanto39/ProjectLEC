@extends('template.master')

@section('title', 'Hired')

@section('content')
    <div class="" style="padding-top: 50px; padding-bottom: 50px">
        <div class="d-flex flex-column align-items-center">
            <img src="/asset/CheckMark.gif" style="width: 250px; height: 250px;" alt="">
            <h1>Thank you for ordering this service!</h1>
            <h5>We have notified the team and they should contact you soon.</h5>
            <a class="btn btn-dark fw-bold" style="background-color: #008BD9; margin-top:10px; text-color: white" href="/" role="button">Return to Home</a>
        </div>
    </div>
@endsection
