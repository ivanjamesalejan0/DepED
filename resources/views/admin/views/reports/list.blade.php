<script>
var requiredCSS = [
  "{{ asset('datatables/css/dataTables.bootstrap.min.css') }}",
  "{{ asset('datatables/ColReorder-1.4.1/css/colReorder.bootstrap.min.css') }}",
  "{{ asset('datatables/Select-1.2.3/css/select.bootstrap.min.css') }}",
  "{{ asset('datatables/Responsive-2.2.0/css/responsive.bootstrap.min.css') }}",
  "{{ asset('datatables/Buttons-1.4.2/css/buttons.dataTables.min.css') }}",
  "{{ asset('datatables/Buttons-1.4.2/css/buttons.bootstrap.min.css') }}",
  "{{ asset('datatables/FixedHeader-3.1.3/css/fixedHeader.bootstrap.min.css') }}",
];

loadCSS(requiredCSS);

var requiredJS = [
  "{{ asset('datatables/js/jquery.dataTables.min.js') }}",
  "{{ asset('datatables/js/dataTables.bootstrap.min.js') }}",
  "{{ asset('datatables/ColReorder-1.4.1/js/dataTables.colReorder.min.js') }}",
  "{{ asset('datatables/Select-1.2.3/js/dataTables.select.min.js') }}",
  "{{ asset('datatables/Responsive-2.2.0/js/dataTables.responsive.min.js') }}",
  "{{ asset('datatables/Buttons-1.4.2/js/dataTables.buttons.min.js') }}",
  "{{ asset('datatables/Buttons-1.4.2/js/buttons.flash.min.js') }}",
  "{{ asset('datatables/Buttons-1.4.2/js/buttons.print.min.js') }}",
  "{{ asset('datatables/Buttons-1.4.2/js/buttons.colVis.min.js') }}",
  "{{ asset('datatables/Buttons-1.4.2/js/buttons.html5.min.js') }}",
  "{{ asset('datatables/JSZip-2.5.0/jszip.min.js') }}",
  "{{ asset('datatables/pdfmake-0.1.32/pdfmake.min.js') }}",
  "{{ asset('datatables/pdfmake-0.1.32/vfs_fonts.js') }}",
  "{{ asset('datatables/FixedHeader-3.1.3/js/dataTables.fixedHeader.min.js') }}",
  "{{ asset('datatables/sorting/currency.js') }}",
  "{{ asset('datatables/sorting/natural.js') }}",
  "{{ asset('datatables/sorting/any-number.js') }}",
  "{{ asset('datatables/sorting/numeric-comma.js') }}",
  "{{ asset('datatables/dataTables.colResize.js') }}",
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
          <th>Name</th>
          <th>Submitted By</th>
          <th>Status</th>
          <th>Date Created</th>
        </tr>
      </thead>
      <tbody>
        @foreach($reports as $r)
        <tr>
          <td>{{$r['name']}}</td>
          <td>{{$r['teacher_id']}}</td>
          <td>{{$r['status']}}</td>
          <td>{{ date('Y-m-d H:i:s', strtotime($r['created_at'])) }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!-- END FEATURED DATATABLE -->