<div class="panel-body">
  <h5>I. DATA ON AFFECTED PERSONNEL</h5>
  <p class="small text-info">(i.e. involved in, affected by, or internally displaced)</p>
</div>

<div class="panel-body">
  <h4><b>Affected Teaching Personel</b></h4>
  <input type="number" name=" Teaching_male" class="form-control" placeholder="male" required value="{{$report->data->{'Teaching_male'} ?? ''}}"><br>
  <input type="number" name=" Teaching_female" class="form-control" placeholder="female" required value="{{$report->data->{'Teaching_female'} ?? ''}}"><br>
</div>

<div class="panel-body">
  <h4><b>Missing DepEd Personnel</b></h4>
  <input type="number" name=" Missing" class="form-control"  required value="{{$report->data->{'Missing'} ?? ''}}"><br>
  </div>

  <div class="panel-body">
  <h4><b>Displaced DepEd Personnel</b></h4>
  <input type="number" name=" Displaced" class="form-control"  required value="{{$report->data->{'Displaced'} ?? ''}}"><br>
  </div>


<div class="panel-body">
  <h4><b>Affected Non-Teaching Personnel </b></h4>
  <input type="number" name=" Non-Teaching_male" class="form-control" placeholder="male" required value="{{$report->data->{'Non-Teaching_male'} ?? ''}}"><br>
  <input type="number" name=" Non-Teaching_female" class="form-control" placeholder="female" required value="{{$report->data->{'Non-Teaching_female'} ?? ''}}"><br>
</div>

<div class="panel-body">
  <h4><b>Total No. of Affected Personnel</b></h4>
  <input type="number" name="Total No_male" class="form-control" placeholder="male" required value="{{$report->data->{'Total_No_male'} ?? ''}}"><br>
  <input type="number" name=" Total No_female" class="form-control" placeholder="female" required value="{{$report->data->{'Total_No_female'} ?? ''}}"><br>
</div>

<div class="panel-body">
  <h5>II. SCHOOL DATA</h5>
  <h4>1. NUMBER OF DAMAGED SCHOOL BUILDINGS/CLASSROOMS</h4>
</div>

<div class="panel-body">
  <h4><b>Type of Building</b></h4>
  <input type="input" name="Type ofBuilding" class="form-control" required value="{{$report->data->{'Type_ofBuilding'} ?? ''}}"><br>
</div>

<div class="panel-body">
  <h4><b>No. of School Building</b></h4>
  <input type="number" name=" No. of School Building" class="form-control" required value="{{$report->data->{'No__of_School_Building'} ?? ''}}"><br>
</div>

<div class="panel-body">
  <h4><b>No. of Instructional Classrooms</b></h4>
  <input type="number" name="No. of Instructional Classrooms" class="form-control" required value="{{$report->data->{'No__of_Instructional_Classrooms'} ?? ''}}"><br>
</div>

<div class="panel-body">
  <h4><b>No. of non-instructional
      Classrooms</b></h4>
  <input type="number" name=" No. of non-instructional Classrooms" class="form-control" required value="{{$report->data->{'No__of_non-instructional_Classrooms'} ?? ''}}"><br>
</div>

<div class="panel-body">
  <h4><b>Extend of Damage (Total, Major or Minor)</b></h4>
  <input type="number" name=" Extend of  Damage" class="form-control" required value="{{$report->data->{'Extend_of__Damage'} ?? ''}}"><br>
</div>