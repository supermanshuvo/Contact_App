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
                <!-- START Edit FORM HEADER -->
                <h1 class="h3 mb-3 font-weight-normal">Add A New Contact</h1>
                <a href="{{ route('contact_index') }}" class="btn btn-primary">Go Back</a>
                <!-- START EDIT FORM -->
                <form method="POST" action="{{ route('add') }}">
                    @csrf
                    <div class="form-group">
                        <label for="firstName">Name :</label>
                        <input type="text" name="name" id="firstName" class="form-control" value="{{ old('name') }}"
                            placeholder="Add Name" autocomplete="off">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Number :</label>
                        <input type="text" name="number" id="inputEmail" class="form-control"
                            value="{{ old('number') }}" placeholder="Add Number" autocomplete="off">
                        @error('number')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                    </div>
                </form>
                <!-- END Edit FORM -->
            </div>
            <!-- START Edit FORM HEADER -->
        </div>
    </div>
</div>
<!-- END CONTAINER AREA -->

@endsection