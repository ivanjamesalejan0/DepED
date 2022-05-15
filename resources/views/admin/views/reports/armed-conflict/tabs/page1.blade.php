<div class="panel-body">
  <h5>SCHOOL NAME</h5>
  {{ $report->teacher->school_data->school_name }}
</div>

<div class="panel-body">
  <h5>SCHOOL ID</h5>
  {{ $report->teacher->school_data->school_id }}</div>

<div class="panel-body">
  <h5>DIVISION</h5>
  <input type="number" name="Division" class="form-control" placeholder="DIVISION" required value="{{$report->data->{'Division'} ?? ''}}">
</div>

<div class="panel-body">
  <h5>DISTRICT</h5>
  <input type="number" name="District" class="form-control" placeholder="DISTRICT" required value="{{$report->data->{'District'} ?? ''}}">
</div>