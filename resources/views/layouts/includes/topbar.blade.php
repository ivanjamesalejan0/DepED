<style>
.brand {
  position: absolute;
  transform: translate(-10%, -30%);
  width: 220px;
  height: auto;
}
</style>
<div class="brand">
  <a href="index.html"><img src="{{ asset('theme/img/rsz_ok.png') }}" alt="DEPED" class="img-responsive logo"></a>
</div>
<div class="container-fluid">
  <div id="tour-fullwidth" class="navbar-btn">
    <button type="button" class="btn-toggle-fullwidth"><i class="ti-arrow-circle-left"></i></button>
  </div>

  <div id="navbar-menu">
    <ul class="nav navbar-nav navbar-right">

      <li class="dropdown">
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="img/users/avatars/{{ Auth::user()->role == 'admin'? Auth::user()->admin->image??'default.png' : Auth::user()->teacher->image??'default.png' }}" alt="Avatar">
          <span>{{ Auth::user()->name }}</span></a>
        <ul class="dropdown-menu logged-user-menu">
          <li><a href="#" onClick="loadView('admin/users/{{Auth::user()->id}}/edit')"><i class="ti-user"></i> <span>My Profile</span></a></li>

          <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
              <i class="ti-power-off"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</div>