@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <!-- ********************* -->
        <!-- Login Card Start -->
        <!-- ********************* -->
        <div class="card bg-style">
            <div class="card-body">
                <div class="row">
                <!-- ********************* -->
                <!-- Start Left Text -->
                <!-- ********************* -->
                    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="text-center">
                            <h3>Welcome</h3>
                            <p>to</p>
                            <h3>Contact App</h3>
                            <img src="img/user.png" alt="There is an user">
                        </div>
                    </div>
                    <!-- ********************* -->
                    <!-- End Left Text -->
                    <!-- ********************* -->
                    <!-- ********************* -->
                    <!-- Start Login Form -->
                    <!-- ********************* -->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <form>
                            <h1 class="h3 mb-3 font-weight-normal">Login Now</h1>
                            <div class="form-group">
                                <label for="inputEmail">Email address</label>
                                <input type="email" id="inputEmail" class="form-control" placeholder="Email address"
                                    required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Password</label>
                                <input type="password" id="inputPassword" class="form-control" placeholder="Password"
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" name="submit" class="btn btn-primary">
                            </div>
                            <p>Don't have an account?<a href="{{ url('/register') }}"> Sign Up</a></p>
                        </form>
                    </div>
                    <!-- ********************* -->
                    <!-- End Login Form -->
                    <!-- ********************* -->
                </div>
            </div>
        </div>
        <!-- ********************* -->
        <!-- End card -->
        <!-- ********************* -->
    </div>
</div>

@endsection