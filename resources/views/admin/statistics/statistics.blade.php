<script>
var requiredCSS = [];
loadCSS(requiredCSS);
var requiredJS = [
  'assets/scripts/charts/statistics-charts.js',
];
loadJS(requiredJS);

var count_ss = <?php echo json_encode($count['ss']); ?>;
var count_ls = <?php echo json_encode($count['ls']); ?>;
var count_ac = <?php echo json_encode($count['ac']); ?>;
</script>



<div class="container">

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Yearly Report - {{ date('Y', strtotime('now')) }}</h3>
      </div>
      <div class="panel-body">
        <canvas id="yearly-chart" height="150"></canvas>
        <form class="margin-top-30">
          <p class="text-muted">Click on labels to toggle view/hide reports</p>
        </form>
      </div>
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Grouped by location - {{ date('Y', strtotime('now')) }}</h3>
      </div>
      <div class="panel-body">
        <table id="geo-total-datatable" class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Province</th>
              <th>Municipality</th>
              <th>Barangay</th>
              <th>Count</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($geo as $g)
            <tr>
              <td>{{$g->province}}</td>
              <td>{{$g->municipality}}</td>
              <td>{{$g->barangay}}</td>
              <td>{{$g->count}}</td>
              <th><a href="admin/statistics/geo-detail-report?province={{ urlencode($g->province) }}&municipality={{ urlencode($g->municipality) }}&barangay={{ urlencode($g->barangay) }}&year={{ date('Y', strtotime('now')) }}" class="btn btn-info view-link">Details</a></th>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>



  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Grouped by schools - {{ date('Y', strtotime('now')) }}</h3>
      </div>
      <div class="panel-body">
        <table id="school-total-datatable" class="table table-striped table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>School Name</th>
              <th>Total</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($schools as $s)
            <tr>
              <td>{{$s->school_id}}</td>
              <td>{{$s->school_name}}</td>
              <td>{{$s->count}}</td>
              <th><a href="admin/statistics/school-detail-report?school_id={{ urlencode($s->school_id) }}&school_name={{ urlencode($s->school_name) }}&year={{ date('Y', strtotime('now')) }}" class="btn btn-info view-link">Details</a></th>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>