<!-- ADD EXTENDS PHP LAYOUTS PROPERTY -->
@extends('layouts.app')
<!-- ADD CONTENT SECTION -->
@section('content')
<!-- START CONTAINER -->
<div class="container">
<!-- START Header Area -->
    <h1 class="text-center heading-style">Welcome To The Contact App</h1>
<!-- END Header Area -->
    <div class="row mt-5">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="user">
                <img src="img/usericon.png" class="img-fluid img-thumbnail mb-5" alt="There Is an User Icon">
                <h3>User Name : SupermanShuvo</h3>
            </div>
            <div class="logout mb-20">
                <a href="{{ route('contact_logout') }}"><input type="button" value="Logout" class="btn btn-warning"></a>
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
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($numbers as $number)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $number['name'] }}</td>
                        <td>{{ $number['number'] }}</td>
                        <td><a href="{{ route('contact_edit') }}"><i class="fa fa-edit" style="font-size:24px;color:blue"></i></a> <a href="delete/{{$item->id}}"><i class="fa fa-trash-o" style="font-size:24px;color:red"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END TABLE -->
    </div>
</div>
<!-- END CONTAINER AREA -->

@endsection