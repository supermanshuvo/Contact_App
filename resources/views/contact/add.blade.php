<!-- ******************************** -->
<!-- ADD EXTENDS PHP LAYOUTS PROPERTY -->
<!-- ******************************** -->
@extends('layouts.app')
<!-- ******************************** -->
<!-- END EXTEND PHP LAYOUTS PROPERTY -->
<!-- ******************************** -->

<!-- ******************************** -->
<!-- START CONTENT SECTION -->
<!-- ******************************** -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- ********************* -->
        <!-- START CARD -->
        <!-- ********************* -->
        <div class="card bg-style">
            <div class="card-body">
                <!-- ********************* -->
                <!-- START Edit FORM HEADER -->
                <!-- ********************* -->
                <h1 class="h3 mb-3 font-weight-normal">Add A New Contact</h1>
                <a href="{{ url('/') }}" class="btn btn-primary">Go Back</a>
                <!-- ******************** -->
                <!-- START EDIT FORM -->
                <!-- ******************** -->
                <form>

                    <div class="form-group">
                        <label for="firstName">Name :</label>
                        <input type="text" name="Name" id="firstName" class="form-control" placeholder="Add Name"
                            autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Number :</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Add Number"
                            autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                    </div>
                </form>
                <!-- ********************* -->
                <!-- END Edit FORM -->
                <!-- ********************* -->
            </div>
            <!-- ********************* -->
            <!-- START Edit FORM HEADER -->
            <!-- ********************* -->
        </div>
    </div>
</div>
<!-- ******************************** -->
<!-- END CONTAINER AREA -->
<!-- ******************************** -->

@endsection
<!-- ******************************** -->
<!-- END CONTENT  SECTION -->
<!-- ******************************** -->