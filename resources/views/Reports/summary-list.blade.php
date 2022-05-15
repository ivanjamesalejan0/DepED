<script>
var requiredCSS = [];
loadCSS(requiredCSS);
var requiredJS = [
  "{{ asset('theme/scripts/admin/reports/reports-list-table.js') }}"
  
];
loadJS(requiredJS);
var isAdmin = <?php echo $user->role == 'admin' ? 'true' : 'false'; ?>
</script>
<!-- FEATURED DATATABLE -->
<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">List Manangement</h3>
  </div>
  <div class="panel-body">
    <p class="alert alert-info hidden">Added paging options and live search</p>
    <table id="reports-list-datatable" class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Type</th>
          <th>Name</th>
          <th>Submitted By</th>
          <th>School</th>
          <th>Status</th>
          <th>Date Created</th>
        </tr>
      </thead>
      <tbody>
        @foreach($reports as $r)
        <tr class="report-list" data-id="{{$r->id}}">
          <td><span class="text-uppercase">{{$r->data->{'report-type'} ?? ''}}</span></td>
          <td><a href="admin/reports/{{$r->id}}?type={{$r->data->{'report-type'} ?? ''}}" class="view-link"><span class="text-uppercase">{{$r->name}}</span></a></td>
          <td><span class="text-uppercase">{{$r->teacher->lastname}}, {{$r->teacher->firstname}} {{$r->teacher->middlename}}</span></td>
          <td><span class="text-uppercase">{{$r->teacher->school}}</span></td>
          <td>
            <select name="form-status" id="select-status" class="form-control">
              <option value="pending" {{$r->status=='pending'?'selected': ''}}>Pending</option>
              <option value="denied" {{$r->status=='denied'?'selected': ''}}>Denied</option>
              <option value="approved" {{$r->status=='approved'?'selected': ''}}>Approved</option>
              <option value="archived" {{$r->status=='archived'?'selected': ''}}>Archived</option>
            </select>
          </td>
          <td>{{ date('Y-m-d H:i:s', strtotime($r->created_at)) }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!-- END FEATURED DATATABLE -->