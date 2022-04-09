<div class="panel-body">
  <h5>1. Name of Incident (Can be a name of tropical cyclone, name of volcano or description of incident)</h5>
  <input type="input" name="Incident" class="form-control" value="{{$report->data->{'Incident'} ?? ''}}">

  <h5>EBEIS SCHOOL ID</h5>
  <input type="input" name="EBEIS" class="form-control" value="{{$report->data->{'EBEIS'} ?? ''}}">
</div>
<hr />

<div class="panel-body">
  <h5>Incurred damages because of incident?</h5>
  <select name="Incurred" class="form-control">
    <option value="No" {{ ($report->data->{'Incurred'}?? null) == 'No' ? 'selected' : '' }}>No</option>
    <option value="Yes" {{ ($report->data->{'Incurred'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
  </select>
</div>

<div class="panel-body">
  <h5>Number of academic classrooms that are totally damaged</h5>
  <input type="number" name="totally-damaged" class="form-control" value="{{$report->data->{'totally-damaged'} ?? ''}}">
  <p class="small text-info">(damaged academic classrooms that cannot be used)</p>
</div>

<div class="panel-body">
  <h5>Number of academic classrooms with major damage</h5>
  <input type="number" name="major-damage" class="form-control" value="{{$report->data->{'major-damage'} ?? ''}}">
  <p class="small text-info">(damage academic classrooms needing major repair and cannot be repaired by school)</p>
</div>

<div class="panel-body">
  <h5>Number of academic classrooms with minor damage </h5>
  <input type="number" name="minor-damage" class="form-control" value="{{$report->data->{'minor-damage'} ?? ''}}">
  <p class="small text-info">(damaged academic classrooms needinf repair that can all be repaired by school)</p>
</div>

<div class="panel-body">
  <h5>Number of temporary learning learning spaces (TLS) needed for immediate class resumption</h5>
  <input type="number" name="learning-spaces" class="form-control" value="{{$report->data->{'learning-spaces'} ?? ''}}">
</div>

<div class="panel-body">
  <h5>Number of decreased DepEd teaching and non-teaching personel</h5>
  <input type="number" name=" decreased-DepEd-teaching " class="form-control" value="{{$report->data->{'decreased-DepEd-teaching'} ?? ''}}">
</div>

<div class="panel-body">
  <h5>Number of injured DepEd teaching and non-teaching personel</h5>
  <input type="number" name=" injured-DepEd-teaching" class="form-control" value="{{$report->data->{'injured-DepEd-teaching'} ?? ''}}">
</div>

<div class="panel-body">
  <h5>Number of displaced DepEd teaching and non-teaching personnel</h5>
  <input type="number" name="displaced-DepEd-teaching" class="form-control" value="{{$report->data->{'displaced-DepEd-teaching'} ?? ''}}">
</div>

<div class="panel-body">
  <h5>Are there still evacuees after three days?</h5>
  <select name="evacuees" class="form-control">
    <option value="No" {{ ($report->data->{'evacuees'}?? null) == 'No' ? 'selected' : '' }}>No</option>
    <option value="Yes" {{ ($report->data->{'evacuees'}?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
  </select>
</div>