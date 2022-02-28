<h5><b>2. DAMAGED NON-INFRASTUCTURE COMPONENTS
    (FOR EACH SCHOOL)</b></h5>
<p>e.g. Learning Materials, School Furniture. DCP Packages
  a. No. of Damaged Learning Materials per title and per grade level
  Kindly fill out template below using separate sheet.</p>
<br>
<p><b>Grade Level </b></p>
<input type="number" name="Grade Level" class="form-control" value="{{$report->data->{'Grade_Level'} ?? ''}}">
<hr />

<p><b>Title of Learning Material</b></p>
<input type="input" name="Title of Learning Material" class="form-control" value="{{$report->data->{'Title_of_Learning_Material'} ?? ''}}"><br>

<label>Total</label><br>
<input type="number" name="Total Learning Materials " class="form-control" value="{{$report->data->{'Total_Learning_Materials_'} ?? ''}}">

<label>b. No. of Damaged School Furniture</label><br>

<label>Arm
  Chairs</label><br>
<input type="number" name=" Arm Chairs" class="form-control" value="{{$report->data->{'Arm_Chairs'} ?? ''}}">

<label>Desks</label><br>
<input type="number" name=" Desks" class="form-control" value="{{$report->data->{'Desks'} ?? ''}}">

<label>Teacher's Tables</label><br>
<input type="number" name="Teachers Tables" class="form-control" value="{{$report->data->{'Teachers_Tables'} ?? ''}}">

<label><b>Chairs/ Desks</b></label>
<input type="number" name="Chairs/ Desks" class="form-control" value="{{$report->data->{'Chairs/_Desks'} ?? ''}}">

<label>Cabinets/Dividers</label><br>
<input type="number" name="Cabinets/Dividers" class="form-control" value="{{$report->data->{'Cabinets/Dividers'} ?? ''}}">
<br>
<hr>