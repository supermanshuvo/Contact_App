@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="card bg-style">
            <div class="card-body">            
        <form>
            <h1 class="h3 mb-3 font-weight-normal">Login Now</h1>
            <div class="form-group">
                <label for="inputEmail">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
            <input type="submit" value="Login" name="submit" class="btn btn-primary">
            </div>
                <p>Don't have an account?<a href="{{ url('/register') }}"> Sign Up</a></p>
        </form>
            </div>
        </div>
    </div>
</div>

@endsection