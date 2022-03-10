<label>III. OTHER INFORMATION</label><br>

<p>Kindly fill out this portion if applicable</p><br>

<p>1. CLASS SUSPENSION (FOR EACH SCHOOL)</p><br>

<label>a. When were classes suspended?</label><br>
<input type="date" name="classes suspended" class="form-control" required  value="{{$report->data->{'classes_suspended'} ?? ''}}"><br>

<label>b. When did classes resume?</label><br>
<input type="date" name=" classes resume" class="form-control" required value="{{$report->data->{'classes_resume'} ?? ''}}"><br>

<p>2. SCHOOL USED A EVACUATION CENTER(FOR EACH SCHOOL)</p><br>

<label>a. How long has the school been used as evacuation center?</label><br>
<input type="number" name="USED A EVACUATION" class="form-control" required value="{{$report->data->{'USED_A_EVACUATION'} ?? ''}}"><br>


<label>b. How many families and individuals are housed within the school vicinity?</label><br>
<select name="housed within the school" class="form-control">
  <option value="Families" {{ ($report->data->{'housed within the school'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Individuals" {{ ($report->data->{'housed within the school'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>

<label>c. Is there an existing Memorandum of Agreement between DepEd and LGU?</label><br>
<select name=" Memorandum of Agreement" class="form-control">
  <option value="No" {{ ($report->data->{' Memorandum of Agreement'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{' Memorandum of Agreement'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>

<p>d. If the use of the school as EC has extended beyond 15 days, has the LGU done the
  following:</p><br>

<label>
  Identified alternative evacuation centers, transitional relocation sities, and/or permanent
  relation sites for final site selection.</label><br>
<select name=" Identified alternative " class="form-control">
  <option value="No" {{ ($report->data->{' Identified alternative '}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{' Identified alternative '} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>

<label><b>Implemented measures to prevent interference or disruption to the final school
    and educational activities of children.</b></label>
<select name="Implemented measures" class="form-control">
  <option value="No" {{ ($report->data->{'Implemented measures'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'Implemented measures'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>

<label>Provided timeline for the relocation of and plans of action for internally displaced
  persons to sites outside of schools.</label><br>
<select name="timeline for the relocation" class="form-control">
  <option value="No" {{ ($report->data->{'timeline for the relocation'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'timeline for the relocation'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>

<label>Facilated general cleaning, fumigation, payment of utilities, and repair of schools
  and child development centers used as ECs.</label><br>
<select name="Facilated general cleaning" class="form-control">
  <option value="No" {{ ($report->data->{'Facilated general cleaning'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'Facilated general cleaning'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>
<br>
<hr>