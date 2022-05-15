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
  <div id="page1-div" style="position:relative;width:302px;height:661px;">
    <img width="700" height="761" src="{{ asset('theme/img/target001.png') }}" alt="background image" />
    <p style="position:absolute;top:30px;left:176px;white-space:nowrap" class="ft10">School&#160;Summary&#160;Report
    </p>
    <p style="position:absolute;top:20px;left:500px;white-space:nowrap" class="ft12">{{ $report->data->{'report-type'} }}</p>
    <p style="position:absolute;top:50px;left:123px;white-space:nowrap" class="ft16">
      <br />{{ $report->teacher->school_data->school_id }}</p>
      <p style="position:absolute;top:80px;left:123px;white-space:nowrap" class="ft16">
      <br />{{ $report->teacher->school_data->school_name }}</p>
    <p style="position:absolute;top:190px;left:139px;white-space:nowrap" class="ft14">REGION&#160;Region&#160;X</p>
    <p style="position:absolute;top:210px;left:131px;white-space:nowrap" class="ft14">
      DIVISION&#160;Malaybalay&#160;City</p>
    <p style="position:absolute;top:265px;left:42px;white-space:nowrap" class="ft15">INFRASTRUCTURE&#160;DAMAGES</p>
    <p style="position:absolute;top:290px;left:110px;white-space:nowrap" class="ft10">1</p>
    <p style="position:absolute;top:310px;left:100px;white-space:nowrap" class="ft11">Classrooms&#160;with </p>
    <p style="position:absolute;top:330px;left:100px;white-space:nowrap" class="ft11">Minor&#160;Damage</p>
    <p style="position:absolute;top:290px;left:320px;white-space:nowrap" class="ft10">2</p>
    <p style="position:absolute;top:310px;left:320px;white-space:nowrap" class="ft11">Classrooms&#160;with</p>
    <p style="position:absolute;top:330px;left:320px;white-space:nowrap" class="ft11">Major&#160;Damage</p>
    <p style="position:absolute;top:290px;left:530px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:310px;left:530px;white-space:nowrap" class="ft11">Totally&#160;Damaged</p>
    <p style="position:absolute;top:330px;left:530px;white-space:nowrap" class="ft11">Classrooms</p>
    <p style="position:absolute;top:353px;left:90px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:370px;left:80px;white-space:nowrap" class="ft11">Classrooms&#160;Used</p>
    <p style="position:absolute;top:390px;left:80px;white-space:nowrap" class="ft11">as Evacuation</p>
    <p style="position:absolute;top:409px;left:80px;white-space:nowrap" class="ft11">Centers</p>
    <p style="position:absolute;top:353px;left:250px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:370px;left:240px;white-space:nowrap" class="ft11">Temporary</p>
    <p style="position:absolute;top:390px;left:240px;white-space:nowrap" class="ft11">Learning Spaces </p>
    <p style="position:absolute;top:409px;left:240px;white-space:nowrap" class="ft11">Requested by School</p>
    <p style="position:absolute;top:353px;left:400px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:370px;left:400px;white-space:nowrap" class="ft11">Damaged&#160;toilets</p>
    <p style="position:absolute;top:350px;left:560px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:370px;left:560px;white-space:nowrap" class="ft11">Damaged</p>
    <p style="position:absolute;top:390px;left:560px;white-space:nowrap" class="ft11">handwashing facilities</p>
    <p style="position:absolute;top:440px;left:42px;white-space:nowrap" class="ft15">
      NON&#160;INFRASTRUCTURE&#160;DAMAGES</p>
    <p style="position:absolute;top:480px;left:100px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:495px;left:100px;white-space:nowrap" class="ft11">Damaged&#160;School</p>
    <p style="position:absolute;top:510px;left:100px;white-space:nowrap" class="ft11">Furniture</p>
    <p style="position:absolute;top:480px;left:330px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:495px;left:330px;white-space:nowrap" class="ft11">Damaged&#160;Learning</p>
    <p style="position:absolute;top:510px;left:330px;white-space:nowrap" class="ft11">Resources</p>
    <p style="position:absolute;top:480px;left:540px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:495px;left:540px;white-space:nowrap" class="ft11">Damaged&#160;Computer</p>
    <p style="position:absolute;top:510px;left:540px;white-space:nowrap" class="ft11">Equipment</p>
    <p style="position:absolute;top:540px;left:42px;white-space:nowrap" class="ft15">
      AFFECTED&#160;LEARNERS&#160;AND&#160;PERSONNEL</p>
    <p style="position:absolute;top:580px;left:100px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:630px;left:-10px;white-space:nowrap" class="ft11">
      Deceased&#160;DepEd&#160;Personnel</p>
    <p style="position:absolute;top:580px;left:265px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:630px;left:170px;white-space:nowrap" class="ft11">
      Missing&#160;DepEd&#160;Personnel</p>
    <p style="position:absolute;top:580px;left:404px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:630px;left:352px;white-space:nowrap" class="ft11">
      Injured&#160;DepEd&#160;Personnel</p>
    <p style="position:absolute;top:580px;left:554px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:630px;left:522px;white-space:nowrap" class="ft11">
      Displaced&#160;DepEd&#160;Personnel</p>
    <p style="position:absolute;top:668px;left:100px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:718px;left:0px;white-space:nowrap" class="ft11">Deceased&#160;Learners</p>
    <p style="position:absolute;top:668px;left:263px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:718px;left:157px;white-space:nowrap" class="ft11">Missing&#160;Learners</p>
    <p style="position:absolute;top:668px;left:420px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:718px;left:365px;white-space:nowrap" class="ft11">Injured&#160;Learners</p>
    <p style="position:absolute;top:668px;left:570px;white-space:nowrap" class="ft10">0</p>
    <p style="position:absolute;top:718px;left:500px;white-space:nowrap" class="ft11">Displaced&#160;Learners</p>
  </div>
</body>

