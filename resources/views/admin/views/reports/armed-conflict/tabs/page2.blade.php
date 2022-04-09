<div class="panel-body">
  <h5>I. DETAILS OF THE INCIDENT</h5>
  <p>NARRATIVE OF THE EVENT / NEW DETAIL ABOUT THE INCIDENT Briefly describe the incident. Leave blank if there is no further update from the
    previously submitted Incident Report.</p>
  <input type="input" name="Narrative" class="form-control" value="{{$report->data->{'Narrative'} ?? ''}}">
</div>

<div class="panel-body">
  <h5>II. SCHOOL DATA</h5>
  <p>NUMBER OF AFFECTED LEARNERS AND PERSONNEL
    DATA ON AFFECTED LEARNERS
    (i.e. invloved in, affected by, or internally displaced)</p>
</div>

<div class="panel-body">
  <div class="school-level-group">
    <h4><b>Kinder</b></h4>
    <input type="number" name="kinder_male" class="form-control school-level-numbers" placeholder="male" value="{{$report->data->{'kinder_male'} ?? ''}}"><br>
    <input type="number" name="kinder_female" class="form-control school-level-numbers" placeholder="female" value="{{$report->data->{'kinder_female'} ?? ''}}"><br>
    Total: <label class="form-control school-level-total">0</label><br>
    <input type="number" name="Grade1_Learners_with_Disabilities" class="form-control" placeholder="Learners with Disabilities" required value="{{$report->data->{'kinder_Learners_with_Disabilities'} ?? ''}}"><br>
  </div>


  <div class="school-level-group">
    <h4><b>Grade 1</b></h4>
    <input type="number" name="Grade1_male" class="form-control school-level-numbers" placeholder="male" value="{{$report->data->{'Grade1_male'} ?? ''}}"><br>
    <input type="number" name="Grade1_female" class="form-control school-level-numbers" placeholder="female" value="{{$report->data->{'Grade1_female'} ?? ''}}"><br>
    Total: <label class="form-control school-level-total">0</label><br>
    <input type="number" name="Grade1_Learners_with_Disabilities" class="form-control" placeholder="Learners with Disabilities" required value="{{$report->data->{'kinder_Learners_with_Disabilities'} ?? ''}}"><br>
  </div>


  <div class="school-level-group">
    <h4><b>Grade 2</b></h4>
    <input type="number" name="Grade2_male" class="form-control school-level-numbers" placeholder="male" value="{{$report->data->{'Grade2_male'} ?? ''}}"><br>
    <input type="number" name="Grade2_female" class="form-control school-level-numbers" placeholder="female" value="{{$report->data->{'Grade2_female'} ?? ''}}"><br>
    Total: <label class="form-control school-level-total">0</label><br>
    <input type="number" name="Grade2_Learners_with_Disabilities" class="form-control" placeholder="Learners with Disabilities" required value="{{$report->data->{'kinder_Learners_with_Disabilities'} ?? ''}}"><br>
  </div>

</div>