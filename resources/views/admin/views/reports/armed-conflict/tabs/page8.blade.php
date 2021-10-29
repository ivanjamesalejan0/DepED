<label>III. OTHER INFORMATION</label><br>

<p>Kindly fill out this portion if applicable</p><br>

<p>1. CLASS SUSPENSION (FOR EACH SCHOOL)</p><br>

<label>a. When were classes suspended?</label><br>
<input type="date" name=" Grade 6_male" class="form-control" placeholder="male" value=""><br>

<label>b. When did classes resume?</label><br>
<input type="date" name=" Grade 6_male" class="form-control" placeholder="male" value=""><br>

<p>2. SCHOOL USED A EVACUATION CENTER(FOR EACH SCHOOL)</p><br>

<label>a. How long has the school been used as evacuation center?</label><br>
<input type="number" name=" Grade 6_male" class="form-control" placeholder="male" value=""><br>


<label>b. How many families and individuals are housed within the school vicinity?</label><br>
<select name="Incurred" class="form-control">
  <option value="Families" {{ ($report->data->{'Incurred'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Individuals" {{ ($report->data->{'Incurred'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>

<label>c. Is there an existing Memorandum of Agreement between DepEd and LGU?</label><br>
<select name="Incurred" class="form-control">
  <option value="No" {{ ($report->data->{'Incurred'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'Incurred'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>

<p>d. If the use of the school as EC has extended beyond 15 days, has the LGU done the
  following:</p><br>

<label>
  Identified alternative evacuation centers, transitional relocation sities, and/or permanent
  relation sites for final site selection.</label><br>
<select name="Incurred" class="form-control">
  <option value="No" {{ ($report->data->{'Incurred'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'Incurred'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>

<label><b>Implemented measures to prevent interference or disruption to the final school
    and educational activities of children.</b></label>
<select name="Incurred" class="form-control">
  <option value="No" {{ ($report->data->{'Incurred'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'Incurred'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>

<label>Provided timeline for the relocation of and plans of action for internally displaced
  persons to sites outside of schools.</label><br>
<select name="Incurred" class="form-control">
  <option value="No" {{ ($report->data->{'Incurred'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'Incurred'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>

<label>Facilated general cleaning, fumigation, payment of utilities, and repair of schools
  and child development centers used as ECs.</label><br>
<select name="Incurred" class="form-control">
  <option value="No" {{ ($report->data->{'Incurred'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'Incurred'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>
<br>
<hr>