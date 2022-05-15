<div class="panel-body">
  <h5>Number of damaged school furniture (armchaird) that needs to be replaced for use of learners </h5>
  <input type="number" name="damaged-school" class="form-control" value="{{$report->data->{'damaged-school'} ?? ''}}">
  <p class="small text-info">
    (Additional information on damaged teachers tables and chairs, tables and chairs for Kinder, and/or desktops shall consolidated by respective divisions. Divisions shall endorse the detailed assessment to
    respective DepEd offices for proper intervention)
  </p>
</div>

<div class="panel-body">
  <h5>Number of copies of learning materials/textbooks used for instruction that were damaged because of incident</h5>
  <input type="number" name="academic-classroom" class="form-control" value="{{$report->data->{'academic-classroom'} ?? ''}}">
  <p class="small text-info">
    (detailed information on number of copies needed for instruction per
    grade level and subject areas shall be consolidated by respective divisions. Divisions shall endorse the detailed assessment to
    respective DepEd offices for proper intercention)
  </p>
</div>

<div class="panel-body">
  <h5>Number of sets of computer equipment used for instruction that were heavily damaged because of incident </h5>
  <input type="number" name="academic-classrooms" class="form-control" value="{{$report->data->{'academic-classrooms'} ?? ''}}">
  <p class="small text-info">
    (detailed information
    on type of equipment damaged shall be consolidated by respective divisions. Divisions shall endorse the detailed
    assessment to respective DepEd offices for proper intervention)
  </p>
  @include('admin.views.reports.armed-conflict.tabs.ajax_upload')
</div>