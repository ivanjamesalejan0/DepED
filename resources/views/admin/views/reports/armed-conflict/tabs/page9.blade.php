<label>ACTIONS TAKEN BY DEPED AND OTHER STAKEHOLDERS. Use separate sheet if needed.</label><br>

<p>Kindly fill out this portion if applicable</p><br>

<p>Affected Teaching Personel</p><br>

<label>School</label><br>
<input type="input" name=" School Affected" class="form-control"  value="{{$report->data->{'School_Affected'} ?? ''}}"><br>

<label>Division</label><br>
<input type="input" name="  Division Affected" class="form-control" required value="{{$report->data->{'Division_Affected'} ?? ''}}"><br>

<label>Region</label><br>
<input type="input" name="  Region Affected" class="form-control"  required value="{{$report->data->{'Region_Affected'} ?? ''}}"><br>

<label>EXTERNAL PARTNERS
  (e.g. NGOs, CSOs)</label><br>
<input type="input" name="EXTERNAL PARTNERS" class="form-control"required  value="{{$report->data->{'EXTERNAL_PARTNERS'} ?? ''}}"><br>

<label>V. OTHER CONCERNS AND RECOMMENDATIONS. Kindly specify other issues needing urgent
  attention, including next steps. Use separate sheet if needed.</label><br>
<input type="input" name="OTHER CONCERNS" class="form-control" required value="{{$report->data->{'OTHER_CONCERNS'} ?? ''}}" ><br>
<br>
@include('admin.views.reports.armed-conflict.tabs.ajax_upload')
<hr>