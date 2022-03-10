<h5><b>SCHOOL NAME</b></h5>
<input type="text" name="School_name" class="form-control" placeholder="SCHOOL NAME" required value="{{$report->data->{'School_name'} ?? ''}}">
<h5><b>SCHOOL ID</b></h5>
<input type="number" name="School_id" class="form-control" placeholder="SCHOOL ID" required value="{{$report->data->{'School_id'} ?? ''}}">
<h5><b>DIVISION</b></h5>
<input type="number" name="Division" class="form-control" placeholder="DIVISION" required value="{{$report->data->{'Division'} ?? ''}}">
<h5><b>DISTRICT</b></h5>
<input type="number" name="District" class="form-control" placeholder="DISTRICT"required value="{{$report->data->{'District'} ?? ''}}">
<br>
<hr />