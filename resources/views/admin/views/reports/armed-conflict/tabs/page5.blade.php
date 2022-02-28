<label><b>DATA ON AFFECTED PERSONNEL
    (i.e. involved in, affected by, or internally displaced)</b></label><br>

<h4><b>Affected Teaching Personel </b></h4>
<input type="number" name=" Teaching_male" class="form-control" placeholder="male" value="{{$report->data->{'Teaching_male'} ?? ''}}"><br>
<input type="number" name=" Teaching_female" class="form-control" placeholder="female" value="{{$report->data->{'Teaching_female'} ?? ''}}"><br>

<h4><b>Affected Non-Teaching Personnel </b></h4>
<input type="number" name=" Non-Teaching_male" class="form-control" placeholder="male" value="{{$report->data->{'Non-Teaching_male'} ?? ''}}"><br>
<input type="number" name=" Non-Teaching_female" class="form-control" placeholder="female" value="{{$report->data->{'Non-Teaching_female'} ?? ''}}"><br>

<h4><b>Total No. of Affected Personnel</b></h4>
<input type="number" name="Total No_male" class="form-control" placeholder="male" value="{{$report->data->{'Total_No_male'} ?? ''}}"><br>
<input type="number" name=" Total No_female" class="form-control" placeholder="female" value="{{$report->data->{'Total_No_female'} ?? ''}}"><br>

<label>II. SCHOOL DATA</label><br><br>


<label><b>2. NUMBER OF DAMAGED SCHOOL
    BUILDINGS/ CLASSROOMS</b></label><br>

<h4><b>Type of
    Building</b></h4>
<input type="input" name="Type ofBuilding" class="form-control" value="{{$report->data->{'Type_ofBuilding'} ?? ''}}"><br>

<h4><b>No. of School
    Building</b></h4>
<input type="number" name=" No. of School Building" class="form-control"  value="{{$report->data->{'No__of_School_Building'} ?? ''}}"><br>

<h4><b>No. of Instructional
    Classrooms</b></h4>
<input type="number" name="No. of Instructional Classrooms" class="form-control" value="{{$report->data->{'No__of_Instructional_Classrooms'} ?? ''}}"><br>

<h4><b>No. of non-instructional
    Classrooms</b></h4>
<input type="number" name=" No. of non-instructional Classrooms" class="form-control" value="{{$report->data->{'No__of_non-instructional_Classrooms'} ?? ''}}"><br>

<h4><b>Extend of  Damage (Total, Major or Minor)</b></h4>
<input type="number" name=" Extend of  Damage" class="form-control" value="{{$report->data->{'Extend_of__Damage'} ?? ''}}"><br>

<hr/>