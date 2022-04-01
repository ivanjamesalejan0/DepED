<script>
var requiredCSS = [];
loadCSS(requiredCSS);
var requiredJS = [
  "{{ asset('theme/scripts/admin/reports/reports-list-table.js') }}"
];
loadJS(requiredJS);
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
          <th>Status</th>
          <th>Date Created</th>
        </tr>
      </thead>
      <tbody>

        @foreach($reports as $r)

        <tr data-id="{{$r->id}}">
          <td>{{$r->data->{'report-type'} ?? ''}}</td>
          <td><a href="admin/reports/{{$r->id}}?type={{$r->data->{'report-type'} ?? ''}}" class="view-link">{{$r->name}}</a></td>
          <td>{{$r->teacher->lastname}}, {{$r->teacher->firstname}} {{$r->teacher->middlename}}</td>
          <td>{{$r->status}}</td>
          <td>{{ date('Y-m-d H:i:s', strtotime($r->created_at)) }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!-- END FEATURED DATATABLE -->