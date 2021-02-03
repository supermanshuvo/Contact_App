<!-- ADD EXTENDS PHP LAYOUTS PROPERTY -->
@extends('layouts.app')
<!-- ADD CONTENT SECTION -->
@section('content')
<!-- START CONTAINER -->
<div class="container">
    <div class="row justify-content-center">
    <!-- START CARD -->
        <div class="card bg-style">
            <div class="card-body">
            <!-- START REGISTER FORM -->
                <form>
                    <h1 class="h3 mb-3 font-weight-normal">Please Input your Information</h1>
                    <div class="form-group">
                        <label for="firstName">Name : </label>
                        <input type="text" name="firstName" id="firstName" class="form-control"
                            placeholder="Enter your Name">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email address :</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                    </div>
                    <div class="form-group">
                        <label for="number">Number :</label>
                        <input type="number" name="number" id="number" class="form-control" placeholder="Enter Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password :</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Confirm Password :</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Confirm Password"
                            required>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                        <p>Already have an account<a href="{{ route('contact_login') }}"> Login Now</a></p>
                    </div>
                </form>
                <!-- END REGISTER FORM -->
            </div>
        </div>
    </div>
</div>
<!-- END CONTAINER AREA -->

@endsection