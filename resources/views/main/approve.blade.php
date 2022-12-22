@extends('template.master')

@section('title', 'Request Job')

@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div class="container w-50 pt-5 pb-5" >
        <div class="bg-light p-5 rounded mt-3 mb-3">
            <h1 class="mb-3 text-center">Job Approval List</h1>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Job Image</th>
                    <th scope="col">Job Name</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Job Description</th>
                    <th scope="col">Job Price</th>
                    <th scope="col">Job Team Count</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
