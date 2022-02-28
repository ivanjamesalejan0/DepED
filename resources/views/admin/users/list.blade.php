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

var returnURL = 'admin/home';

</script>
<!-- FEATURED DATATABLE -->
<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">Members List</h3>
  </div>
  <div class="panel-body">
    <table id="featured-datatable" class="table table-striped table-hover">
      <thead>
        <tr>
          <th>firstname</th>
          <th>email</th>
          <th>Gender</th>
          <th>school</th>
          <th>status</th>
        </tr>
      </thead>
      <tbody>
        @foreach($teachers as $teacher)
         
        <tr>
          <td>{{strtoupper($teacher->firstname)}}</td>
          <td>{{strtoupper($teacher->email)}}</td>
          <td>{{strtoupper($teacher->gender)}}</td>
          <td>{{$teacher->school_name}}</td>
          <td>
            @if(!$teacher->active)
              <a href="#" class="btn btn-success" onClick="approveMember({{$teacher->user_id}})" title="Active">active</a>
            @else  
              <a href="#" class="btn btn-danger" onClick="deactivateMember({{$teacher->user_id}})" title="Archive">deactivate</a>
            @endif  
        </td>
        </tr>
        @endforeach
      </tbody>  
    </table>
  </div>
</div>

<form id="app-form" class="form-horizontal hidden" role="form" method="POST" autocomplete="off"
  enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="_method" value="delete" />
  <input class="btn btn-default" type="submit" value="Delete" />
</form>
<!-- END FEATURED DATATABLE -->