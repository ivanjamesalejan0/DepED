<script>
var requiredCSS = [
  "{{ asset('assets/css/pdf-style.css') }}",
];
loadCSS(requiredCSS);
</script>

<style type="text/css">
    <!--
    p {
      margin: 0;
      padding: 0;
    }

    .ft10 {
      font-size: 23px;
      font-family: Times;
      color: #05508c;
    }

    .ft11 {
      font-size: 15px;
      font-family: Times;
      color: #05508c;
    }

    .ft12 {
      font-size: 20px;
      font-family: Times;
      color: #ffffff;
    }

    .ft13 {
      font-size: 23px;
      font-family: Times;
      color: #ffffff;
    }

    .ft14 {
      font-size: 15px;
      font-family: Times;
      color: #ffffff;
    }

    .ft15 {
      font-size: 20px;
      font-family: Times;
      color: #05508c;
    }

    .ft16 {
      font-size: 23px;
      line-height: 37px;
      font-family: Times;
      color: #ffffff;
    }
    -->
  </style>
  
<body bgcolor="#A0A0A0" vlink="blue" link="blue">
  <div id="page1-div" style="position:relative;width:892px;height:1261px;">
    <img width="892" height="1261" src="{{ asset('theme/img/target001.png') }}" alt="background image" />
    <p style="position:absolute;top:30px;left:176px;white-space:nowrap" class="ft10">School&#160;Summary&#160;Report
    </p>
    <p style="position:absolute;top:43px;left:714px;white-space:nowrap" class="ft12">{{ $report->data->{'report-type'} }}</p>
    <p style="position:absolute;top:188px;left:123px;white-space:nowrap" class="ft16">
      <br /> {{ $report->teacher->school_data->school_id }}</p>
    <p style="position:absolute;top:168px;left:123px;white-space:nowrap" class="ft16">
      <br /> {{ $report->teacher->school_data->school_name }}</p>
    <p style="position:absolute;top:282px;left:139px;white-space:nowrap" class="ft14">REGION&#160;Region&#160;X</p>
    <p style="position:absolute;top:320px;left:131px;white-space:nowrap" class="ft14">
      DIVISION&#160;Malaybalay&#160;City</p>
    <p style="position:absolute;top:448px;left:42px;white-space:nowrap" class="ft15">INFRASTRUCTURE&#160;DAMAGES</p>
    <p style="position:absolute;top:506px;left:129px;white-space:nowrap" class="ft10">1</p>
    <p style="position:absolute;top:538px;left:129px;white-space:nowrap" class="ft11">Classrooms&#160;with </p>
    <p style="position:absolute;top:559px;left:129px;white-space:nowrap" class="ft11">Minor&#160;Damage</p>
    <p style="position:absolute;top:506px;left:400px;white-space:nowrap" class="ft10">2</p>
    <p style="position:absolute;top:538px;left:400px;white-space:nowrap" class="ft11">Classrooms&#160;with</p>
    <p style="position:absolute;top:559px;left:400px;white-space:nowrap" class="ft11">Major&#160;Damage</p>
    <p style="position:absolute;top:506px;left:671px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:538px;left:671px;white-space:nowrap" class="ft11">Totally&#160;Damaged</p>
    <p style="position:absolute;top:559px;left:671px;white-space:nowrap" class="ft11">Classrooms</p>
    <p style="position:absolute;top:613px;left:110px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:645px;left:110px;white-space:nowrap" class="ft11">Classrooms&#160;Used</p>
    <p style="position:absolute;top:666px;left:110px;white-space:nowrap" class="ft11">as </p>
    <p style="position:absolute;top:688px;left:110px;white-space:nowrap" class="ft11">Evacuation</p>
    <p style="position:absolute;top:709px;left:110px;white-space:nowrap" class="ft11">Centers</p>
    <p style="position:absolute;top:613px;left:313px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:645px;left:313px;white-space:nowrap" class="ft11">Temporary</p>
    <p style="position:absolute;top:666px;left:313px;white-space:nowrap" class="ft11">Learning&#160;Spaces </p>
    <p style="position:absolute;top:688px;left:313px;white-space:nowrap" class="ft11">Requested&#160;by</p>
    <p style="position:absolute;top:709px;left:313px;white-space:nowrap" class="ft11">School</p>
    <p style="position:absolute;top:613px;left:516px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:645px;left:516px;white-space:nowrap" class="ft11">Damaged&#160;toilets</p>
    <p style="position:absolute;top:613px;left:720px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:645px;left:720px;white-space:nowrap" class="ft11">Damaged</p>
    <p style="position:absolute;top:666px;left:720px;white-space:nowrap" class="ft11">handwashing</p>
    <p style="position:absolute;top:688px;left:720px;white-space:nowrap" class="ft11">facilities</p>
    <p style="position:absolute;top:762px;left:42px;white-space:nowrap" class="ft15">
      NON&#160;INFRASTRUCTURE&#160;DAMAGES</p>
    <p style="position:absolute;top:816px;left:141px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:848px;left:141px;white-space:nowrap" class="ft11">Damaged&#160;School</p>
    <p style="position:absolute;top:870px;left:141px;white-space:nowrap" class="ft11">Furniture</p>
    <p style="position:absolute;top:816px;left:414px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:848px;left:414px;white-space:nowrap" class="ft11">Damaged&#160;Learning</p>
    <p style="position:absolute;top:870px;left:414px;white-space:nowrap" class="ft11">Resources</p>
    <p style="position:absolute;top:816px;left:687px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:848px;left:687px;white-space:nowrap" class="ft11">Damaged&#160;Computer</p>
    <p style="position:absolute;top:870px;left:687px;white-space:nowrap" class="ft11">Equipment</p>
    <p style="position:absolute;top:922px;left:42px;white-space:nowrap" class="ft15">
      AFFECTED&#160;LEARNERS&#160;AND&#160;PERSONNEL</p>
    <p style="position:absolute;top:984px;left:145px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:1069px;left:42px;white-space:nowrap" class="ft11">
      Deceased&#160;DepEd&#160;Personnel</p>
    <p style="position:absolute;top:984px;left:349px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:1069px;left:247px;white-space:nowrap" class="ft11">
      Missing&#160;DepEd&#160;Personnel</p>
    <p style="position:absolute;top:984px;left:554px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:1069px;left:452px;white-space:nowrap" class="ft11">
      Injured&#160;DepEd&#160;Personnel</p>
    <p style="position:absolute;top:984px;left:759px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:1069px;left:656px;white-space:nowrap" class="ft11">
      Displaced&#160;DepEd&#160;Personnel</p>
    <p style="position:absolute;top:1127px;left:145px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:1213px;left:42px;white-space:nowrap" class="ft11">Deceased&#160;Learners</p>
    <p style="position:absolute;top:1127px;left:349px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:1213px;left:247px;white-space:nowrap" class="ft11">Missing&#160;Learners</p>
    <p style="position:absolute;top:1127px;left:554px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:1213px;left:452px;white-space:nowrap" class="ft11">Injured&#160;Learners</p>
    <p style="position:absolute;top:1127px;left:759px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:1213px;left:656px;white-space:nowrap" class="ft11">Displaced&#160;Learners</p>
  </div>


    </div>
    <div class="col-xs-12 col-sm-3">
    <img style="height: 300px; width: auto" class="img-square" src="img/reports/{{ $report->data->{'report-type'} }}/{{  $report->data->image ?? 'default.png'}}">
      <!-- Contact user -->
      <p>
        <a href="#" class="profile__contact-btn btn btn-lg btn-block btn-info" data-toggle="modal" data-target="#profile__contact-form">
          Contact Teacher <span class="glyphicon glyphicon-envelope"></span>
        </a>
        <a href="views/admin/reports/{{$report->id}}?type={{$report->data->{'report-type'} ?? ''}}&download=pdf" target="_blank" class="profile__contact-btn btn btn-lg btn-block btn-primary">
          Download PDF <span class="glyphicon glyphicon-download-alt"></span>
        </a>
      </p>

      <hr class="profile__contact-hr">



    </div>
  </div>
</div>