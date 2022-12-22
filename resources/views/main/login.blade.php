@extends('template.master')

@section('title', 'Login')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 70vh">
    <div class="container w-50" style="">
        <div class="bg-light p-5 rounded mt-3 mb-3" id="box">
            <h1 class="mb-3 text-center">Login</h1>
                <form action="{{ route('login') }}" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <p>Don't have an account? <a href="{{ route('register') }}">Register here!</a></p>
                  <div class="mb-2">
                      @if($errors->any())
                      <p class="text-danger">{{$errors->first()}}</p>
                      @endif
                  </div>
                  <button type="submit" class="btn btn-primary float-end">Login</button>
                </form>
        </div>
    </div>
  </div>

@endsection
