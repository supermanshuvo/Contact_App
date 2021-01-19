@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="text-center">Welcome to the Contact app</h1>
    <div class="row mt-5">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <h3>User name</h3>
            <a href="{{ url('/logout') }}"><input type="button" value="Logout" class="btn btn-warning"></a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Sl No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>01700000000</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>01700000001</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>01700000002</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection