<script>
var requiredCSS = [
  'assets/vendor/sweetalert2/sweetalert2.css',
  'assets/vendor/datatables/css-main/jquery.dataTables.min.css',
  'assets/vendor/datatables/css-bootstrap/dataTables.bootstrap.min.css',
  'assets/vendor/datatables-tabletools/css/dataTables.tableTools.css'
];

loadCSS(requiredCSS);

var requiredJS = [
  'assets/vendor/sweetalert2/sweetalert2.js',
  'assets/vendor/datatables/js-main/jquery.dataTables.min.js',
  'assets/vendor/datatables/js-bootstrap/dataTables.bootstrap.min.js',
  'assets/vendor/datatables-colreorder/dataTables.colReorder.js',
  'assets/vendor/datatables-tabletools/js/dataTables.tableTools.js',
  'assets/scripts/members/members-table.setup.js'
];

loadJS(requiredJS);

var returnURL = 'admin/users';
</script>
<!-- FEATURED DATATABLE -->


<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">Members List</h3>
  </div>
  <div class="panel-body">
    <p class="text-right">
      <a href="admin/users/create" class="btn btn-primary view-link">Add User <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
    </p>
    <h4>Teachers & Principals List</h4>
    <table id="featured-datatable" class="table table-striped table-hover">
      <thead>
        <tr>
          <th>&nbsp;</th>
          <th>Name</th>
          <th>Username</th>
          <th>Email</th>
          <th>Gender</th>
          <th>Status</th>
          <th>School</th>
          <th>Role</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($teachers as $teacher)

        <tr>
          <td><img style="height: 50px; width: 50px" class="img-circle" src="img/users/avatars/{{ $teacher->image ?? 'default.png'}}"></td>
          <td>{{strtoupper($teacher->lastname)}}, {{strtoupper($teacher->firstname)}} {{strtoupper($teacher->middlename)}}</td>
          <td>{{strtoupper($teacher->name)}}</td>
          <td>{{strtoupper($teacher->email)}}</td>
          <td>{{strtoupper($teacher->gender)}}</td>
          <td>{{strtoupper($teacher->status)}}</td>
          <td>{{strtoupper($teacher->school_name)}}</td>
          <td><span class="badge badge-{{$teacher->role == 'principal'?'primary':'secondary'}}">{{$teacher->role}}</span></td>
          <td>
            <a href="admin/users/{{$teacher->id}}/edit" class="btn btn-primary view-link" title="Edit">Edit</a>
            @if(!$teacher->active)
            <a href="#" class="btn btn-success" onClick="approveMember({{$teacher->user_id}})" title="Activate">Activate</a>
            @else
            <a href="#" class="btn btn-danger" onClick="deactivateMember({{$teacher->user_id}})" title="Deactivate">Deactivate</a>
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <hr />
    <h4>Administrators List</h4>
    <table id="admin-featured-datatable" class="table table-striped table-hover">
      <thead>
        <tr>
          <th>&nbsp;</th>
          <th>Name</th>
          <th>Username</th>
          <th>Email</th>
          <th>Role</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($admins as $admin)
        <tr>
          <td><img style="height: 50px; width: 50px" class="img-circle" src="img/users/avatars/{{ $admin->image ?? 'default.png'}}"></td>
          <td>{{strtoupper($admin->lastname)}}, {{strtoupper($admin->firstname)}} {{strtoupper($admin->middlename)}}</td>
          <td>{{strtoupper($admin->name)}}</td>
          <td>{{strtoupper($admin->email)}}</td>
          <td><span class="badge badge-danger">{{$admin->role}}</span></td>
          <td>
            <a href="admin/users/{{$admin->id}}/edit" class="btn btn-primary view-link" title="Edit">Edit</a>
            @if(!$admin->active)
            <a href="#" class="btn btn-success" onClick="approveMember({{$admin->user_id}})" title="Activate">Activate</a>
            @else
            <a href="#" class="btn btn-danger" onClick="deactivateMember({{$admin->user_id}})" title="Deactivate">Deactivate</a>
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<hr />

<div class="panel {{ count($teachers_invalid)? '': 'hidden'}}">
  <div class="panel-heading">
    <h3 class="panel-title">Invalid Registration Requests</h3>
  </div>
  <div class="panel-body">
    <p class="text-info">These are registration with unrecognized School ID entries. You may contact these persons to notify them and ask to register again.</p>
    <table id="unfeatured-datatable" class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Username</th>
          <th>Email</th>
          <th>Gender</th>
          <th>Status</th>
          <th>School</th>
          <th>Roles</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($teachers_invalid as $teacher)
        <tr>
          <td>{{strtoupper($teacher->lastname)}}, {{strtoupper($teacher->firstname)}} {{strtoupper($teacher->middlename)}}</td>
          <td>{{strtoupper($teacher->name)}}</td>
          <td>{{strtoupper($teacher->email)}}</td>
          <td>{{strtoupper($teacher->gender)}}</td>
          <td>{{strtoupper($teacher->status)}}</td>
          <td>{{$teacher->school}}</td>
          <td><span class="badge badge-{{$teacher->role == 'principal'?'primary':'secondary'}}">{{$teacher->role}}</span></td>
          <td>
            <a href="#" class="btn btn-danger" onClick="deleteMember({{$teacher->user_id}})" title="Delete">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<form id="app-form" class="form-horizontal hidden" role="form" method="POST" autocomplete="off" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="_method" value="delete" />
  <input class="btn btn-default" type="submit" value="Delete" />
</form>
<!-- END FEATURED DATATABLE -->