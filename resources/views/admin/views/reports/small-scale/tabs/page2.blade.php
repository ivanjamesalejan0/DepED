<div class="panel-body">
  <h5>3. Was a suspention of class declared by Barangay or LGU in responce to the</h5>
  <select name="suspention" class="form-control">
    <option value="No" {{ ($report->data->suspention ?? null) == 'No' ? 'selected' : '' }}>No</option>
    <option value="Yes" {{ ($report->data->suspention ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
  </select>

  <div id="class-was-suspended" class="{{($report->data->{'suspention'} ?? null) == 'Yes' ? '' : 'hidden' }}">
    <h5>If suspention of class declared, how may days?</h5>
    <input type="number" name="class-declared" class="form-control" value="{{$report->data->{'class-declared'} ?? ''}}">
  </div>
</div>

<div class="panel-body">
  <h5>4. Where did the incident happen?</h5>
  <input type="input" name="incident-happen" class="form-control" value="{{$report->data->{'incident-happen'} ?? ''}}">

  <div>
    <h5>If the incident happened during an off-campus activity, what was the name of
      the activity conducted by the school?</h5>
    <input type="text" name="incident-declared" class="form-control" value="{{$report->data->{'incident-declared'} ?? ''}}">
  </div>
</div>

<div class="panel-body">
  <h5>5. When did the incident happen? </h5>
  <input type="input" name="incident" class="form-control" value="{{$report->data->{'incident'} ?? ''}}">
  <p class="small text-info">(Give the date and time)</p>
</div>

<div class="panel-body">
  <h5>6. Give a brief description or a short narrative of the incident.</h5>
  <input type="input" name="brief" class="form-control" value="{{$report->data->{'brief'} ?? ''}}">
  <p class="small text-info">(You may yse additional sheet)</p>
</div>

<div class="panel-body">
  <h5>7. Who were the person involved abd/or affected? </h5>
  <input type="input" name=" person-involved" class="form-control" value="{{$report->data->{'person-involved'} ?? ''}}">
  <p class="small text-info">(List the names of people or groups involved and/or
    affected. Please attach sheet if needed.)</p>
</div>