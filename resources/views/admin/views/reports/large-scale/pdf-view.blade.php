<link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/pdf-style.css') }}" rel="stylesheet">
<style>
  p{
    float: left;
    margin-left:250px;
  }
img{
  float: left;
    margin-left:150px;
}
  </style>
<div class="container1">
  <div class="row">
  <br>
  <div class="col-xs-10 col-sm-9">
  <img src="{{ asset('theme/img/248350555_1061292314707821_6149040979343760114_n.png') }}" alt="DEPED" class="img-responsive logo" style= "position:relative; top:5px; width:100px;height:auto;">
  <div class="panel-heading">
       <center> <p>Republic of the Philippines </p> <br></center>
          <p>Department of Education </p><br>
          <p>REGION X- NORTHERN MINDANAO</p><br>
          <p>DIVISION OF MALAYBALAY CITY </p>
      </div>
      <br>
       <br>
        </div>
</div>
</div>
<div class="container">
  <div class="row">
  <div class="col-xs-10 col-sm-9">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">{{$report->name}}</h4>
        </div>
        <div class="panel-body">
          <div class="profile__header">
            <h4>{{$report->teacher->lastname}}, {{$report->teacher->firstname}} {{$report->teacher->middlename}}<small>Teacher</small></h4>
           
          </div>
        </div>
      </div>

      <!-- User info -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Report Info</h4>
        </div>
        <div class="panel-body">
          <table class="table profile__table">
            <tbody>
              <tr>
                <th><strong>Location</strong></th>
                <td>{{$report->province}}, {{$report->municipality}}, {{$report->barangay}}</td>
              </tr>
              <tr>
                <th><strong>Type</strong></th>
                <td>{{ $report->data->{'report-type'} }}</td>
              </tr>
              <tr>
                <th><strong>Date</strong></th>
                <td>{{$report->created_at}}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Community -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Report Detail</h4>
        </div>
        <div class="panel-body">
          <table class="table profile__table">
            <tbody>
              @foreach($report->data as $r=>$d)
              <tr>
                <th><strong>{{ strtoupper($r) }}</strong></th>
                <td>{{ strtoupper($d) }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
</div>
