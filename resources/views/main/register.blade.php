@extends('template.master')

@section('title', 'Register')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh">
    <div class="container w-50" style="">
        <div class="bg-light p-5 rounded mt-3 mb-3">
            <h1 class="mb-3 text-center">Register</h1>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" id="confirm" name="confirm">
                </div>
                <div class="mb-2 form-check d-flex justify-content-start gap-2">
                    <input class="form-check-input" type="checkbox" name="terms" value="0" id="terms">
                    <label class="form-check-label" for="terms">
                      I agree to the terms & conditions
                    </label>
                </div>
                <p>Already have an account? <a href="{{ route('login') }}">Login here!</a></p>
                  <div class="mb-2">
                    @if($errors->any())
                    <p class="text-danger">{{ $errors->first() }}</p>
                    @endif
                  </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
        </div>
@endsection
