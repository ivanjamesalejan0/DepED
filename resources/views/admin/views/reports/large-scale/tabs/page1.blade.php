<h5><b>1. Name of Incident (Can be a name of tropical cyclone, name of volcano or description of incident)</b></h5>
<input type="input" name="Incident" class="form-control" value="{{$report->data->{'Incident'} ?? ''}}">
<br>
<p><b>EBEIS SCHOOL ID</p></b>
<input type="input" name="EBEIS" class="form-control" value="{{$report->data->{'EBEIS'} ?? ''}}">
<hr />

<label><b>Incurred damages because of incident?</b></label>
<select name="Incurred" class="form-control">
  <option value="No" {{ ($report->data->{'Incurred'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'Incurred'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select></h5>
<label>Number of academic classrooms that are totally damaged(damaged academic classrooms that cannot be used)</label><br>
<input type="number" name="totally-damaged" class="form-control" value="{{$report->data->{'totally-damaged'} ?? ''}}">

<label>Number of academic classrooms with major damage(damage academic classrooms needing major repair and cannot be repaired by school)</label><br>
<input type="number" name="major-damage" class="form-control" value="{{$report->data->{'major-damage'} ?? ''}}">

<label>Number of academic classrooms with minor damage (damaged academic classrooms needinf repair that can all be repaired by school)</label><br>
<input type="number" name="minor-damage" class="form-control" value="{{$report->data->{'minor-damage'} ?? ''}}">

<label>Number of temporary learning learning spaces (TLS) needed for immediate class resumption</label><br>
<input type="number" name="learning-spaces" class="form-control" value="{{$report->data->{'learning-spaces'} ?? ''}}">

<label>Number of decreased DepEd teaching and non-teaching personel</label><br>
<input type="number" name=" decreased-DepEd-teaching " class="form-control" value="{{$report->data->{'decreased-DepEd-teaching'} ?? ''}}">

<label>Number of injured DepEd teaching and non-teaching personel</label><br>
<input type="number" name=" injured-DepEd-teaching" class="form-control" value="{{$report->data->{'injured-DepEd-teaching'} ?? ''}}">

<label>Number of displaced DepEd teaching and non-teaching personnel</label><br>
<input type="number" name="displaced-DepEd-teaching" class="form-control" value="{{$report->data->{'displaced-DepEd-teaching'} ?? ''}}">

<label><b>Are there still evacuees after three days?</b></label>
<select name="evacuees" class="form-control">
  <option value="No" {{ ($report->data->{'evacuees'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'evacuees'}?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>
<br>