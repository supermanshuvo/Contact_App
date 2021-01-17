@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form>
            <h1 class="h3 mb-3 font-weight-normal">Please Input your Information</h1>
            <div class="form-group">
                <label for="firstName">First Name : </label>
                <input type="text" name="firstName" id="firstName" class="form-control" placeholder="Enter your Name">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password :</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Confirm Password :</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Confirm Password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                <p>Already have an account<a href="{{ url('/login') }}"> Login Now</a></p>
            </div>
        </form>
    </div>
</div>

@endsection