<script>
var requiredCSS = [];
loadCSS(requiredCSS);
var requiredJS = [];
loadJS(requiredJS);


var count_ss = <?php echo json_encode($count['ss']); ?>;
var count_ls = <?php echo json_encode($count['ls']); ?>;
var count_ac = <?php echo json_encode($count['ac']); ?>;
</script>



<div class="row">

  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Detailed report view - {{ date('Y', strtotime('now')) }}</h3>
      </div>
      <div class="panel-body">

        <p>

        <table class="table table-striped">
          <tbody>
            <tr>
              <td>School ID</td>
              <td>{{Request::input('school_id')}}</td>
            </tr>
            <tr>
              <td>School Name</td>
              <td>{{Request::input('school_name')}}</td>
            </tr>
          </tbody>
        </table>

        </p>

        <table id="school-total-datatable" class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Report Type</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Small-scale</td>
              <td>{{$count['ss']}}</td>
            </tr>
            <tr>
              <td>Large-scale</td>
              <td>{{$count['ls']}}</td>
            </tr>
            <tr>
              <td>Armed-conflict</td>
              <td>{{$count['ac']}}</td>
            </tr>
            <tr class="twitter-bg" style="color: white;">
              <td><strong>Total</strong></td>
              <td><strong>{{ $count['ss'] + $count['ls'] + $count['ac'] }}</strong></td>
            </tr>
          </tbody>
        </table>
        <hr>
        <div>
          <a href="admin/statistics" class="btn btn-info view-link">
            <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> Back to Statistics</span>
          </a>
        </div>
      </div>
    </div>
  </div>

</div>