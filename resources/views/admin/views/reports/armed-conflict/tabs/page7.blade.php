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

<label>Hamleting</label><br>
<select name="Hamleting" class="form-control">
  <option value="No" {{ ($report->data->{'Hamleting'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'Hamleting'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>

<label>Food Blockaden</label><br>
<select name="Food Blockaden" class="form-control">
  <option value="No" {{ ($report->data->{'Food Blockaden'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'Food Blockaden'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>

<label>International delayed reporting at a child in custody</label><br>
<select name="International delayed" class="form-control">
  <option value="No" {{ ($report->data->{'International delayed'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'International delayed'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>

<label>Rape and Grave Sexual Violence of
  Children</label><br>
<select name="Rape and Grave Sexual" class="form-control">
  <option value="No" {{ ($report->data->{'Rape and Grave Sexual'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'Rape and Grave Sexual'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>

<label><b>False reporting of a child in custody</b></label>
<select name="False reporting" class="form-control">
  <option value="No" {{ ($report->data->{'False reporting'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'False reporting'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>

<label>False branding of children or labeling of children as Children in Armed Conflict (CIAC)</label><br>
<select name="False branding" class="form-control">
  <option value="No" {{ ($report->data->{'False branding'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'False branding'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>

<label>Arrest arbitary detendion, or unlawful prosecution of children allegedly associated
  with armed groups or government forces.</label><br>
<select name="Arrest arbitary detendion" class="form-control">
  <option value="No" {{ ($report->data->{'Arrest arbitary detendion'}?? null) == 'No' ? 'selected' : '' }}>No</option>
  <option value="Yes" {{ ($report->data->{'Arrest arbitary detendion'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
</select>
<br>