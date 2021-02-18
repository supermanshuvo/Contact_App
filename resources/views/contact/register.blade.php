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
                <!-- Alert Area -->
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h1 class="h3 mb-3 font-weight-normal">Please Input your Information</h1>
                    <div class="form-group">
                        <label for="firstName">Name : </label>
                        <input type="text" name="name" value="{{ old('name') }}" id="firstName" class="form-control"
                            placeholder="Enter your Name">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email address :</label>
                        <input type="text" name="email" value="{{ old('email') }}" id="inputEmail" class="form-control"
                            placeholder="Email address">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="number">Number :</label>
                        <input type="text" name="number" value="{{ old('number') }}" id="number" class="form-control"
                            placeholder="Enter Phone Number">
                        @error('number')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password :</label>
                        <input type="password" name="password" value="{{ old('password') }}" id="inputPassword"
                            class="form-control" placeholder="Password">
                        @error('password')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Confirm Password :</label>
                        <input type="password" name="confirm_password" value="{{ old('confirm_password') }}"
                            id="inputPassword" class="form-control" placeholder="Confirm Password">
                        @error('confirm_password')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
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