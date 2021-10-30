<link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/pdf-style.css') }}" rel="stylesheet">

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-9">

      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">{{$report->name}}</h4>
        </div>
        <div class="panel-body">
          <div class="profile__header">
            <h4>{{$report->teacher->lastname}}, {{$report->teacher->firstname}} {{$report->teacher->middlename}}<small>Teacher</small></h4>
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non nostrum odio cum repellat veniam eligendi rem cumque magnam autem delectus qui.
            </p>
            <p>
              <a href="#">Bukidnon State University</a>
            </p>
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