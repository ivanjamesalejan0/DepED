<script>
var requiredCSS = [
  "{{ asset('assets/css/pdf-style.css') }}",
];
loadCSS(requiredCSS);
</script>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-9">

      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">{{$report->name}}</h4>
        </div>
        <div class="panel-body">
          <div class="profile__avatar">
            <img src="img/users/avatars/{{ $report->teacher->image ?? 'default.png'  }}" alt="...">
          </div>
          <div class="profile__header">
            <h4>{{$report->teacher->lastname}}, {{$report->teacher->firstname}} {{$report->teacher->middlename}} </h4>
            <p class="text-muted">
              <span class="badge badge-{{$report->teacher->role == 'principal'?'primary':'secondary'}}">{{$report->teacher->role}}</span>
            </p>
            <p>
              <a href="#">{{ $report->teacher->school_data->school_name }}</a>
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
      <img style="height: 300px; width: auto" class="img-square" src="img/reports/{{ $report->data->{'report-type'} }}/{{  $report->data->image ?? 'default.png'}}">
     


    </div>
    <div class="col-xs-12 col-sm-3">
     
      <!-- Contact user -->
      <p>
        <a href="views/admin/reports/{{$report->id}}?type={{$report->data->{'report-type'} ?? ''}}&download=pdf" target="_blank" class="profile__contact-btn btn btn-lg btn-block btn-primary">
          Download PDF <span class="glyphicon glyphicon-download-alt"></span>
        </a>
      </p>

      <hr class="profile__contact-hr">



    </div>
  </div>
</div>