<div class="panel-body">
  <h4>2. DAMAGED NON-INFRASTUCTURE COMPONENTS (FOR EACH SCHOOL)</h4>
  <p class="small text-info">e.g. Learning Materials, School Furniture. DCP Packages</p>
</div>

<div class="panel-body">
  <h5>a. No. of Damaged Learning Materials per title and per grade level</h5>
  <p class="small text-info">Kindly fill out template below using separate sheet.</p>
  <h4><b>Grade Level </b></h4>
  <input type="number" name="Grade Level" class="form-control" required value="{{$report->data->{'Grade_Level'} ?? ''}}">
  <label><b>Title of Learning Material</b></label>
  <input type="input" name="Title of Learning Material" class="form-control" required value="{{$report->data->{'Title_of_Learning_Material'} ?? ''}}"><br>
  <label>Total</label><br>
  <input type="number" name="Total Learning Materials " class="form-control" required value="{{$report->data->{'Total_Learning_Materials_'} ?? ''}}">

</div>

<div class="panel-body">
  <h5>b. No. of Damaged School Furniture</h5><br>

  <label>Arm Chairs</label><br>
  <input type="number" name=" Arm Chairs" class="form-control" required value="{{$report->data->{'Arm_Chairs'} ?? ''}}">

  <label>Desks</label><br>
  <input type="number" name=" Desks" class="form-control" required value="{{$report->data->{'Desks'} ?? ''}}">

  <label>Teacher's Tables</label><br>
  <input type="number" name="Teachers Tables" class="form-control" required value="{{$report->data->{'Teachers_Tables'} ?? ''}}">

  <label>Chairs/ Desks</label>
  <input type="number" name="Chairs/ Desks" class="form-control" required value="{{$report->data->{'Chairs/_Desks'} ?? ''}}">

  <label>Cabinets/Dividers</label><br>
  <input type="number" name="Cabinets/Dividers" class="form-control" required value="{{$report->data->{'Cabinets/Dividers'} ?? ''}}">
</div>