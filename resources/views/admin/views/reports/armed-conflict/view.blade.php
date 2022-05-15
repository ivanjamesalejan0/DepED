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
      <p style="position:absolute;top:43px;left:654px;white-space:nowrap" class="ft12">{{ $report->data->{'report-type'} }}</p>
      <p style="position:absolute;top:128px;left:123px;white-space:nowrap" class="ft16">
      <br /> {{ $report->teacher->school_data->school_id }}</p>
    <p style="position:absolute;top:168px;left:123px;white-space:nowrap" class="ft16">
      <br /> {{ $report->teacher->school_data->school_name }}</p>
      <p style="position:absolute;top:282px;left:139px;white-space:nowrap" class="ft14">REGION&#160;Region&#160;X</p>
      <p style="position:absolute;top:320px;left:131px;white-space:nowrap" class="ft14">
        DIVISION&#160;Malaybalay&#160;City</p>
      <p style="position:absolute;top:169px;left:661px;white-space:nowrap" class="ft12">Other</p>
      <p style="position:absolute;top:202px;left:606px;white-space:nowrap" class="ft12">Secondary&#160;Hazard</p>
      <p style="position:absolute;top:243px;left:576px;white-space:nowrap" class="ft12">1200</p>
      <p style="position:absolute;top:276px;left:569px;white-space:nowrap" class="ft12">School</p>
      <p style="position:absolute;top:304px;left:558px;white-space:nowrap" class="ft12">Enrollees</p>
      <p style="position:absolute;top:243px;left:763px;white-space:nowrap" class="ft12">1</p>
      <p style="position:absolute;top:276px;left:741px;white-space:nowrap" class="ft12">DepEd</p>
      <p style="position:absolute;top:304px;left:725px;white-space:nowrap" class="ft12">Personnel</p>
      <p style="position:absolute;top:448px;left:42px;white-space:nowrap" class="ft15">INFRASTRUCTURE&#160;DAMAGES</p>
      <p style="position:absolute;top:506px;left:129px;white-space:nowrap" class="ft10">{{$report->data->{'No__of_non-instructional_Classrooms'} ?? ''}}</p>
      <p style="position:absolute;top:538px;left:129px;white-space:nowrap" class="ft11">Classrooms&#160;with </p>
      <p style="position:absolute;top:559px;left:129px;white-space:nowrap" class="ft11">Minor&#160;Damage</p>
      <p style="position:absolute;top:506px;left:400px;white-space:nowrap" class="ft10">{{$report->data->{'No__of_Instructional_Classrooms'} ?? ''}}</p>
      <p style="position:absolute;top:538px;left:400px;white-space:nowrap" class="ft11">Classrooms&#160;with</p>
      <p style="position:absolute;top:559px;left:400px;white-space:nowrap" class="ft11">Major&#160;Damage</p>
      <p style="position:absolute;top:506px;left:671px;white-space:nowrap" class="ft10">{{$report->data->{'Extend_of__Damage'} ?? ''}}</p>
      <p style="position:absolute;top:538px;left:671px;white-space:nowrap" class="ft11">Totally&#160;Damaged</p>
      <p style="position:absolute;top:559px;left:671px;white-space:nowrap" class="ft11">Classrooms</p>
      <p style="position:absolute;top:613px;left:110px;white-space:nowrap" class="ft10">{{$report->data->{'USED_A_EVACUATION'} ?? ''}}</p>
      <p style="position:absolute;top:645px;left:110px;white-space:nowrap" class="ft11">Classrooms&#160;Used</p>
      <p style="position:absolute;top:666px;left:110px;white-space:nowrap" class="ft11">as </p>
      <p style="position:absolute;top:688px;left:110px;white-space:nowrap" class="ft11">Evacuation</p>
      <p style="position:absolute;top:709px;left:110px;white-space:nowrap" class="ft11">Centers</p>
      <p style="position:absolute;top:613px;left:313px;white-space:nowr ap" class="ft10">{{$report->data->{'No__of_School_Building'} ?? ''}}</p>
      <p style="position:absolute;top:645px;left:313px;white-space:nowrap" class="ft11">No of School</p>
      <p style="position:absolute;top:666px;left:313px;white-space:nowrap" class="ft11">Building </p>
      
      <p style="position:absolute;top:613px;left:516px;white-space:nowrap" class="ft10">0</p>
      <p style="position:absolute;top:645px;left:516px;white-space:nowrap" class="ft11">Damaged&#160;toilets</p>
      <p style="position:absolute;top:613px;left:720px;white-space:nowrap" class="ft10">0</p>
      <p style="position:absolute;top:645px;left:720px;white-space:nowrap" class="ft11">Damaged</p>
      <p style="position:absolute;top:666px;left:720px;white-space:nowrap" class="ft11">handwashing</p>
      <p style="position:absolute;top:688px;left:720px;white-space:nowrap" class="ft11">facilities</p>
      <p style="position:absolute;top:762px;left:42px;white-space:nowrap" class="ft15">
        NON&#160;INFRASTRUCTURE&#160;DAMAGES</p>
      <p style="position:absolute;top:816px;left:141px;white-space:nowrap" class="ft10">{{$report->data->{'Arm_Chairs'} ?? ''}}</p>
      <p style="position:absolute;top:848px;left:141px;white-space:nowrap" class="ft11">Damaged&#160;School</p>
      <p style="position:absolute;top:870px;left:141px;white-space:nowrap" class="ft11">Furniture</p>
      <p style="position:absolute;top:816px;left:414px;white-space:nowrap" class="ft10">{{$report->data->{'Total_Learning_Materials_'} ?? ''}}</p>
      <p style="position:absolute;top:848px;left:414px;white-space:nowrap" class="ft11">Damaged&#160;Learning</p>
      <p style="position:absolute;top:870px;left:414px;white-space:nowrap" class="ft11">Resources</p>
      <p style="position:absolute;top:816px;left:687px;white-space:nowrap" class="ft10">{{$report->data->{'Desks'} ?? ''}}</p>
      <p style="position:absolute;top:848px;left:687px;white-space:nowrap" class="ft11">Damaged&#160;Computer</p>
      <p style="position:absolute;top:870px;left:687px;white-space:nowrap" class="ft11">Equipment</p>
      <p style="position:absolute;top:922px;left:42px;white-space:nowrap" class="ft15">
        AFFECTED&#160;LEARNERS&#160;AND&#160;PERSONNEL</p>
      <p style="position:absolute;top:984px;left:145px;white-space:nowrap" class="ft10">{{$report->data->{'Teaching_female'} ?? ''}}</p>
      <p style="position:absolute;top:1069px;left:42px;white-space:nowrap" class="ft11">
      Affected Teaching Personel</p>
      <p style="position:absolute;top:984px;left:349px;white-space:nowrap" class="ft10">{{$report->data->{'Missing'} ?? ''}}</p>
      <p style="position:absolute;top:1069px;left:247px;white-space:nowrap" class="ft11">
        Missing&#160;DepEd&#160;Personnel</p>
      <p style="position:absolute;top:984px;left:554px;white-space:nowrap" class="ft10">{{$report->data->{'Non-Teaching_female'} ?? ''}}</p>
      <p style="position:absolute;top:1069px;left:452px;white-space:nowrap" class="ft11">
        Injured&#160;DepEd&#160;Personnel</p>
      <p style="position:absolute;top:984px;left:759px;white-space:nowrap" class="ft10">{{$report->data->{'Displaced'} ?? ''}}</p>
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