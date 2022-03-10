<nav>
  <ul class="nav" id="sidebar-nav-menu">
  @if ($user->role == 'admin')
    <li class="menu-group">Main</li>
    <li><a href="admin/home"><span class="title">Home</span></a></li>
    <li><a href="admin/reports"><span class="title">Manage Reports</span></a></li>
    <li><a href="admin/users/create"><span class="title">Add User</span></a></li>
    <li><a href="admin/users"><span class="title">Manage Users</span></a></li>
    <li><a href="admin/statistics"><span class="title">Statistic</span></a></li>
  @elseif ($user->role == 'teacher')
    <li class="menu-group">Components</li>
    <li><a href="admin/home"><span class="title">Home</span></a></li>
    <li><a href="admin/reports"><span class="title">Manage Reports</span></a></li>
    <li><a href="admin/reports/create?type=small-scale"><span class="title">Add Small Scale Report</span></a></li>
    <li><a href="admin/reports/create?type=large-scale"><span class="title">Add Large Scale Report</span></a></li>
    <li><a href="admin/reports/create?type=armed-conflict"><span class="title">Add Armed Conflict Report</span></a></li>
    @elseif ($user->role == 'principal')
    <li><a href="admin/home"><span class="title">Home</span></a></li>
    <li><a href="admin/users/create"><span class="title">Add User</span></a></li>
    @else
    I don't have any records!
  @endif
  </ul>
  <button type="button" class="btn-toggle-minified" title="Toggle Minified Menu"><i class="ti-arrows-horizontal"></i></button>
<center><p>© 2021 . All Rights Reserved. </p></cennter>
<center><p>By Tamb breaker</p></cennter>
</nav>