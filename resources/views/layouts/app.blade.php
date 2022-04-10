<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="{{  asset('theme/img/249751651_599905524484536_8579641574835364272_n.png') }}">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">
  <link href="{{ asset('css/custom-style.css') }}" rel="stylesheet">
  <link href="{{ asset('theme/vendor/sweetalert2/sweetalert2.css') }}" rel="stylesheet">

  <!--external css-->
  <!-- Custom styles for this template -->

</head>

<body>


  <div id="app">

    <div class="col-md-3 col-md-offset-2">
      <center> <img src="{{ asset('theme/img/Deped.png') }}" alt="DEPED" class="img-responsive logo" style="position:relative; top:170px; width:300px;height:auto; float: right;
    margin-right: 150px"></a></center>

    </div>
  </div>
  <div class="col-md-3 col-md-offset-2">
    <center> <img src="{{ asset('theme/img/249751651_599905524484536_8579641574835364272_n.png') }}" alt="DEPED" class="img-responsive logo" style="position:relative; top: 170px; width: 150px; height: auto; float: right; margin-right: 550px;"></a>
    </center>

  </div>
  </div>
  <div class="col-md-3 col-md-offset-2">
    <center> <img src="{{ asset('theme/img/download (1).png') }}" alt="DEPED" class="img-responsive logo" style="position:relative; top: 180px; width: 200px; height: auto; float: right; margin-right: 140px;"></a>
    </center>

  </div>
  </div>
  <!-- <nav class="navbar navbar-default navbar-static-top"> -->
  <div class="container">
    <div class="navbar-header">

      <!-- Collapsed Hamburger -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- Branding Image -->

    </div>


  </div>
  </nav>

  @yield('content')
  </section>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('lib/jquery.dcjqaccordion.2.7.js') }}"></script>
  <script src="{{ asset('lib/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('lib/jquery.nicescroll.js') }}"></script>
  <!--common script for all pages-->
  <script src="{{ asset('lib/common-scripts.js') }}"></script>
  <script src="{{ asset('theme/vendor/sweetalert2/sweetalert2.js') }}"></script>
  <script src="{{ asset('theme/scripts/admin/reports/reports-form.js') }}"></script>
</body>

</html>