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
            <!-- START Edit FORM -->
            <h1 class="h3 mb-3 font-weight-normal">Edit Contact</h1>
            <a href="{{ route('contact_index') }}" class="btn btn-primary">Go Back</a>
                <form method="POST" action="{{ route('edit') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="form-group">
                        <label for="firstName">Name :</label>
                        <input type="text" name="name" id="firstName" class="form-control"
                            placeholder="Edit Name" value="{{$data->name}}" autocomplete="off">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Number :</label>
                        <input type="text" name="number" id="inputEmail" class="form-control" value="{{$data->number}}" placeholder="Edit Number" autocomplete="off">
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
        </div>
    </div>
</div>
<!-- END CONTAINER AREA -->

@endsection