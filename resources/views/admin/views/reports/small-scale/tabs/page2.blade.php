<label><b>3. Was a suspention of class declared by Barangay or LGU in responce to the</b></label>
<select name="suspention" class="form-control">
  <option value="No" {{ ($report->data->suspention ?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->suspention ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select></h5>
<label>If suspention of class declared, how may days?</label><br>
<input type="number" name="class-declared" class="form-control" value="{{$report->data->{'class-declared'} ?? ''}}">

<label>Where did the incident happen?</label><br>
<input type="input" name="incident-happen" class="form-control" value="{{$report->data->{'incident-happen'} ?? ''}}">

<label><b>If the incident happened during an off-campus activity, what was the name of
    the activity conducted by the school</label><br></b>

<label>5. When did the incident happen? (Give the date and time)</label><br>
<input type="input" name="incident" class="form-control" value="{{$report->data->{'incident'} ?? ''}}">

<label>6. Give a brief description or a short narrative of the incident.(You may yse additional sheet)</label><br>
<input type="input" name="brief" class="form-control" value="{{$report->data->{'brief'} ?? ''}}">

<label>7. Who were the person involved abd/or affected? (List the names of people or groups involved and/or
  affected. Please attach sheet if needed.)</label><br>
<input type="input" name=" person-involved" class="form-control" value="{{$report->data->{'person-involved'} ?? ''}}">
<br>