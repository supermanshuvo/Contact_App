<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- START TITLE -->
    <title>{{ config('app.name')}}</title>
    <!-- END TITLE -->
    <!-- START CSS LINK -->
    <link rel="stylesheet" href="{{ Asset('css/app.css')}}">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- END CSS LINK -->
</head>

<body>
    <!-- ********************* -->
    <!-- START NAVBAR -->
    <!-- ********************* -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">{{ config('app.name')}}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
<!-- ********************* -->
<!-- END NAVBAR -->
<!-- ********************* -->

    @yield('content')
    <!-- ********************* -->
    <!-- START JS FILE LINK -->
    <!-- ********************* -->
    <script src="{{ Asset('js/app.js')}}"></script>
    <!-- ********************* -->
    <!-- END JS FILE LINK -->
    <!-- ********************* -->
</body>

</html>