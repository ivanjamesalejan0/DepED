<label>Number of damaged school furniture (armchaird) that needs to be replaced for use of learners(Additional information on damaged teachers tables and chairs, tables and chairs for Kinder, and/or desktops shall consolidated by respective divisions. Divisions shall endorse the detailed assessment to
respective DepEd offices for proper intervention)</label><br>
<input type="number" name= "damaged-school" class="form-control" value="{{$report->data->{'damaged-school'} ?? ''}}">
<br>
<hr />

<label>Number of copies of learning materials/textbooks used for instruction that were damaged because of incident(detailed information on number of copies needed for instruction per
grade level and subject areas shall be consolidated by respective divisions. Divisions shall endorse the detailed assessment to
respective DepEd offices for proper intercention)</label><br>
<input type="number" name= "academic-classroom" class="form-control" value="{{$report->data->{'academic-classroom'} ?? ''}}">
<br>
<hr />

<label>Number of sets of computer equipment used for instruction that were heavily damaged because of incident (Detailed information
on type of equipment damaged shall be consolidated by respective divisions. Divisions shall endorse the detailed
assessment to respective DepEd offices for proper intervention):{{$report->data->{'academic-classrooms'} ?? ''}}</label><br>
<input type="number" name= "academic-classrooms" class="form-control" value="{{$report->data->{'academic-classrooms'} ?? ''}}" >
<br>