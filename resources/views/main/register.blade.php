@extends('template.master')

@section('title', 'Register')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh">
    <div class="container w-50" style="">
        <form>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
