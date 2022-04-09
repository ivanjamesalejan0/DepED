<div class="panel-body">
  <h5>SCHOOL NAME</h5>
  <input type="text" name="School_name" class="form-control" placeholder="SCHOOL NAME" required value="{{$report->data->{'School_name'} ?? ''}}">
</div>

<div class="panel-body">
  <h5>SCHOOL ID</h5>
  <input type="number" name="School_id" class="form-control" placeholder="SCHOOL ID" required value="{{$report->data->{'School_id'} ?? ''}}">
</div>

<div class="panel-body">
  <h5>DIVISION</h5>
  <input type="number" name="Division" class="form-control" placeholder="DIVISION" required value="{{$report->data->{'Division'} ?? ''}}">
</div>

<div class="panel-body">
  <h5>DISTRICT</h5>
  <input type="number" name="District" class="form-control" placeholder="DISTRICT" required value="{{$report->data->{'District'} ?? ''}}">
</div>