<!doctype html>
<html lang="en">

<head>
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="icon" type="image/png" href="{{  asset('theme/img/249751651_599905524484536_8579641574835364272_n.png') }}">
  <link class="default-style" rel="stylesheet" href="{{ asset('theme/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link class="default-style" id="main-style" rel="stylesheet" href="{{ asset('css/bs-demo.css') }}">
  <link class="default-style" rel="stylesheet" href="{{ asset('theme/vendor/font-awesome/css/font-awesome.min.css') }}">
  <link class="default-style" rel="stylesheet" href="{{ asset('theme/vendor/themify-icons/css/themify-icons.css') }}">
  <link class="default-style" rel="stylesheet" href="{{ asset('theme/vendor/pace/themes/orange/pace-theme-minimal.css') }}">
  <link class="default-style" id="main-style" rel="stylesheet" href="{{ asset('theme/css/main.min.css') }}">
  <link class="default-style" rel="stylesheet" href="{{ asset('theme/css/skins/sidebar-nav-darkgray.css') }}" type="text/css">
  <link class="default-style" rel="stylesheet" href="{{ asset('theme/css/skins/navbar3.css') }}" type="text/css">

  <!-- plugin css -->
  <link href="{{ asset('theme/vendor/sweetalert2/sweetalert2.css') }}" rel="stylesheet" class="default-style">
  <link href="{{ asset('theme/vendor/toastr/toastr.min.css') }}" rel="stylesheet" class="default-style">
  <link href="{{ asset('datatables/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" class="default-style">
  <link href="{{ asset('datatables/ColReorder-1.4.1/css/colReorder.bootstrap.min.css') }}" rel="stylesheet" class="default-style">
  <link href="{{ asset('datatables/Select-1.2.3/css/select.bootstrap.min.css') }}" rel="stylesheet" class="default-style">
  <link href="{{ asset('datatables/Responsive-2.2.0/css/responsive.bootstrap.min.css') }}" rel="stylesheet" class="default-style">
  <link href="{{ asset('datatables/Buttons-1.4.2/css/buttons.dataTables.min.css') }}" rel="stylesheet" class="default-style">
  <link href="{{ asset('datatables/Buttons-1.4.2/css/buttons.bootstrap.min.css') }}" rel="stylesheet" class="default-style">
  <link href="{{ asset('datatables/FixedHeader-3.1.3/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet" class="default-style">

  <link href="{{ asset('theme/vendor/dropify/css/dropify.min.css') }}" rel="stylesheet" class="default-style">



  <!-- FOR DEMO PURPOSES ONLY. You should/may remove this in your project -->
  <link class="default-style" rel="stylesheet" href="{{ asset('theme/css/demo.css') }}">
  <link class="default-style" rel="stylesheet" href="{{ asset('css/custom-style.css') }}">

  <!-- ICONS -->
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('theme/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('theme/img/favicon.png') }}">
</head>

<body>
  <!-- WRAPPER -->
  <div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
      @include('layouts.includes.topbar')
    </nav>
    <!-- END NAVBAR -->

    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
      @include('layouts.includes.sidebar')
    </div>
    <!-- END LEFT SIDEBAR -->

    <!-- MAIN -->
    <div class="main">

      <!-- MAIN CONTENT -->
      <div class="main-content">
        <div class="content-heading clearfix">
          <div class="heading-left">
            <h1 class="page-title" id="view-title"></h1>
            <p class="page-subtitle" id="view-description"></p>
          </div>
          <ul class="breadcrumb" id="view-breadcrumb">
            <li class="home"><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#dashboards"> Dashboards </a></li>
            <li class="active"> Geo Stats </li>
          </ul>
        </div>
        <div class="container-fluid">
          <div id="main-view"></div>
        </div>

      </div>
      <!-- END MAIN CONTENT -->

      <!-- RIGHT SIDEBAR -->
      <div id="sidebar-right" class="right-sidebar">
        @include('layouts.includes.right-sidebar')
      </div>
      <!-- END RIGHT SIDEBAR -->
    </div>
    <!-- END MAIN -->
    <div class="clearfix"></div>

    <footer>
      @include('layouts.includes.footer')
    </footer>
  </div>
  <!-- END WRAPPER -->

  <!-- JAVASCRIPTS -->

  <script class="default-js" src="{{ asset('theme/vendor/jquery/jquery.min.js') }}"></script>
  <script class="default-js" src="{{ asset('theme/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script class="default-js" src="{{ asset('theme/vendor/pace/pace.min.js') }}"></script>
  <script class="default-js" src="{{ asset('theme/vendor/sweetalert2/sweetalert2.js') }}"></script>
  <script class="default-js" src="{{ asset('theme/vendor/toastr/toastr.min.js') }}"></script>

  <script class="default-js" src="{{ asset('theme/scripts/main-menu.custom.js') }}"></script>
  <script class="default-js" src="{{ asset('theme/scripts/app.custom.js') }}"></script>

  <!-- plugin js -->
  <script class="default-js" src="{{ asset('datatables/js/jquery.dataTables.min.js') }}"></script>
  <script class="default-js" src="{{ asset('datatables/js/dataTables.bootstrap.min.js') }}"></script>
  <script class="default-js" src="{{ asset('datatables/ColReorder-1.4.1/js/dataTables.colReorder.min.js') }}"></script>
  <script class="default-js" src="{{ asset('datatables/Select-1.2.3/js/dataTables.select.min.js') }}"></script>
  <script class="default-js" src="{{ asset('datatables/Responsive-2.2.0/js/dataTables.responsive.min.js') }}"></script>
  <script class="default-js" src="{{ asset('datatables/Buttons-1.4.2/js/dataTables.buttons.min.js') }}"></script>
  <script class="default-js" src="{{ asset('datatables/Buttons-1.4.2/js/buttons.flash.min.js') }}"></script>
  <script class="default-js" src="{{ asset('datatables/Buttons-1.4.2/js/buttons.print.min.js') }}"></script>
  <script class="default-js" src="{{ asset('datatables/Buttons-1.4.2/js/buttons.colVis.min.js') }}"></script>
  <script class="default-js" src="{{ asset('datatables/Buttons-1.4.2/js/buttons.html5.min.js') }}"></script>
  <script class="default-js" src="{{ asset('datatables/JSZip-2.5.0/jszip.min.js') }}"></script>
  <script class="default-js" src="{{ asset('datatables/pdfmake-0.1.32/pdfmake.min.js') }}"></script>
  <script class="default-js" src="{{ asset('datatables/pdfmake-0.1.32/vfs_fonts.js') }}"></script>
  <script class="default-js" src="{{ asset('datatables/FixedHeader-3.1.3/js/dataTables.fixedHeader.min.js') }}"></script>
  <script class="default-js" src="{{ asset('datatables/sorting/currency.js') }}"></script>
  <script class="default-js" src="{{ asset('datatables/sorting/natural.js') }}"></script>
  <script class="default-js" src="{{ asset('datatables/sorting/any-number.js') }}"></script>
  <script class="default-js" src="{{ asset('datatables/sorting/numeric-comma.js') }}"></script>
  <script class="default-js" src="{{ asset('datatables/dataTables.colResize.js') }}"></script>

  <script class="default-js" src="{{ asset('js/jquery.form-validator.min.js') }}"></script>

  <script class="default-js" src="{{ asset('theme/vendor/dropify/js/dropify.min.js') }}"></script>
  <script class="default-js" src="{{ asset('theme/vendor/chart-js/Chart.min.js') }}"></script>




</body>

</html>