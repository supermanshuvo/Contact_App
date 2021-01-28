@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="text-center">Welcome to the Contact app</h1>
    <div class="row mt-5">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="user">
                <img src="img/usericon.png" class="img-fluid img-thumbnail mb-5" alt="There Is an User Icon">
                <h3>User Name : SupermanShuvo</h3>
            </div>
            <div class="logout mt-5">
                <a href="{{ url('/logout') }}"><input type="button" value="Logout" class="btn btn-warning"></a>
            </div>
        </div>
        <!-- START TABLE -->
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ml-5">
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
                    <tr>
                        <th scope="row">4</th>
                        <td>Shuvo</td>
                        <td>01303316865</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Moyna</td>
                        <td>01791623736</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END TABLE -->
    </div>
</div>

@endsection