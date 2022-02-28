<label><b>I. DETAILS OF THE INCIDENT</b></label>
<label>NARRATIVE OF THE EVENT / NEW DETAIL ABOUT THE INCIDENT Briefly describe the incident. Leave blank if there is no further update from the
  previously submitted Incident Report.</label><br>
<input type="input" name="Narrative" class="form-control" value="{{$report->data->{'Narrative'} ?? ''}}"></textarea><br>

<label>II. SCHOOL DATA</label><br><br>


<label><b>NUMBER OF AFFECTED LEARNERS AND PERSONNE
    DATA ON AFFECTED LEARNERS
    (i.e. invloved in, affected by, or internally displaced)</b></label><br>

<h4><b>Kinder</b></h4>
<input type="number" name=" kinder_male" class="form-control" placeholder="male" value="{{$report->data->{'kinder_male'} ?? ''}}"><br>
<input type="number" name=" kinder_female" class="form-control" placeholder="female" value="{{$report->data->{'kinder_female'} ?? ''}}"><br>
<input type="number" name="kinder_total" class="form-control"><br>
<input type="number" name=" kinder_Learners with Disabilities" class="form-control" placeholder="Learners with Disabilities" value="{{$report->data->{'kinder_Learners_with_Disabilities'} ?? ''}}"><br>


<h4><b>Grade 1</b></h4>
<input type="number" name=" Grade1_male" class="form-control" placeholder="male" value="{{$report->data->{'Grade1_male'} ?? ''}}"><br>
<input type="number" name=" Grade1_female" class="form-control" placeholder="female" value="{{$report->data->{'Grade1_female'} ?? ''}}"><br>
<input type="number" name="Grade1_total"><br>
<input type="input" name=" Grade1_Learners with Disabilities" class="form-control" placeholder="Learners with Disabilities" value="{{$report->data->{'Grade1_Learners_with_Disabilities'} ?? ''}}"><br>

<h4><b>Grade 2</b></h4>
<input type="number" name=" Grade2_male" class="form-control" placeholder="male" value="{{$report->data->{'Grade2_male'} ?? ''}}"><br>
<input type="number" name=" Grade2_female" class="form-control" placeholder="female" value="{{$report->data->{'Grade2_female'} ?? ''}}"><br>
<input type="number" name="Grade2_total"><br>
<input type="input" name=" Grade2_Learners with Disabilities" class="form-control" placeholder="Learners with Disabilities" value="{{$report->data->{'Grade2_Learners_with_Disabilities'} ?? ''}}">
<br>
<hr />