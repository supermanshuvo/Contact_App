@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form>
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <div class="form-group">
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button class="btn btn-info">Create Account</button>
                <a href="{{ url('/login') }}"><button class="btn btn-primary" type="submit">Sign in</button></a>
            </div>
        </form>
    </div>
</div>

@endsection