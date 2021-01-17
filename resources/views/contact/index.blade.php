@extends('layouts.app')
@section('content')
<div class="container">
<h1 class="text-center">Welcome to the Contact app</h1>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <h3>User name</h3>
            <a href="{{ url('/logout') }}"><input type="button" value="Logout" class="btn btn-warning"></a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        
        </div>
    </div>
</div>

@endsection