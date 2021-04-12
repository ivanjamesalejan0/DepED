@extends('layouts.app')

@section('content')
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="container">
            <aside> 
            <div id="sidebar" class="col-15 col-sm-8 col-md-15 ">
                <ul class="sidebar-menu" id="nav-accordion">
                <li class="mt">
                    <a class="active" href="<?= url('layouts/admin'); ?>">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                    </a>
                    <ul class="sub">
                    <li><a href="add" class="active view-blade">Add Users</a></li>
                    <li><a href="#">Add School</a></li>
                    <li><a href="">Recent User</a></li>
                    <li><a href="#">pending User</a></li>
                    <li><a href="#">View reports</a></li>
                    </ul>
                </li>
                <!-- sidebar menu end-->
            </div>
            </aside>

            @include('layouts.graph')
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong></strong>. All Rights Reserved
        </p>
        <div class="credits">
          Created with Tamb Breaker
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
@endsection