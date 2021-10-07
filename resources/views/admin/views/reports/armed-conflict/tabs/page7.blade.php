<label>4. GRAVE CHILD RIGHT & VIOLATION (GCRVs) AND OTHER
RELATED VIOLATIONS.</label><br>

<p>Kindly indicate if the the following may have been committed, and
attach a full report.</p><br>

<p>For each GCRV that may have
been committed, provide as much
details as possible(who, what, when, where, how),
and supporting documents(e.g. pictures, statement, statement, other related
reports) in a separate sheet.</p><br>

<label>List of GCRV's</label><br>

<label>	Hamleting</label><br>
<select name="Incurred" class="form-control">
  <option value="No" {{ ($report->data->{'Incurred'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'Incurred'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>

<label>Food Blockaden</label><br>
<select name="Incurred" class="form-control">
  <option value="No" {{ ($report->data->{'Incurred'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'Incurred'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>

<label>International delayed reporting at a child in custody</label><br>
<select name="Incurred" class="form-control">
  <option value="No" {{ ($report->data->{'Incurred'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'Incurred'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>

<label>Rape and Grave Sexual Violence of
Children</label><br>
<select name="Incurred" class="form-control">
  <option value="No" {{ ($report->data->{'Incurred'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'Incurred'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>

<label><b>False reporting of a child in custody</b></label>
<select name="Incurred" class="form-control">
  <option value="No" {{ ($report->data->{'Incurred'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'Incurred'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>

<label>False branding of children or labeling of children as Children in Armed Conflict (CIAC)</label><br>
<select name="Incurred" class="form-control">
  <option value="No" {{ ($report->data->{'Incurred'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'Incurred'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>

<label>Arrest arbitary detendion, or unlawful prosecution of children allegedly associated
with armed groups or government forces.</label><br>
<select name="Incurred" class="form-control">
  <option value="No" {{ ($report->data->{'Incurred'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'Incurred'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>
<br>