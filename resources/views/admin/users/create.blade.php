<script>
requiredCSS = [
  'assets/vendor/sweetalert2/sweetalert2.css',
];

loadCSS(requiredCSS);

requiredJS = [
  'assets/vendor/sweetalert2/sweetalert2.js',
  'js/jquery.form-validator.min.js',
  'js/webcam.min.js',
  'theme/scripts/admin/users/users-form.js',
];


loadJS(requiredJS);
</script>

<div class="row">
  <form id="app-form" class="form-horizontal" role="form" method="POST"
    action="views/admin/users"
    autocomplete="off" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="">
    <input type="hidden" name="_token" value="">
    <input type="hidden" name="image" value="">

    @if(isset($member))
    <input type="hidden" name="id" value="">
    @endif

    <div class="col-md-12">
      <div class="row">
        <div class="col-md-8">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Basic Information</h3>
            </div>
            <div class="panel-body">

              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4 col-lg-4">
                    <div class="form-group form-control-container">
                      <label class="control-label">First Name</label>
                      <input type="text" name="firstname" class="form-control" value="">
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-4">
                    <div class="form-group form-control-container">
                      <label class="control-label">Middle Name</label>
                      <input type="text" name="middlename" class="form-control" value="">
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-4">
                    <div class="form-group form-control-container">
                      <label class="control-label">Last Name</label>
                      <input type="text" name="lastname" class="form-control" value="">
                    </div>
                  </div>
                </div>
              </div>
                  <div class="col-md-4 col-lg-4">
                    <div class="form-group form-control-container">
                      <label class="control-label">Civil Status</label>
                      <select name="civil_status" class="form-control">
                        <option value="single" >
                          Single</option>
                        <option value="married" >
                          Married</option>
                        <option value="widowed" >
                          Widowed</option>
                        <option value="widower">
                          Widower</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-4">
                    <div class="form-group form-control-container">
                      <label class="control-label">Role</label>
                      <select name="role" class="form-control">
                        <option value="principal" >
                        Principal</option>
                        <option value="teacher_user" >
                        Teacher_user</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-4">
                    <div class="form-group form-control-container">
                      <label class="control-label">school</label>
                      <select name="school" class="form-control">
                        
                      </select>
                    </div>
                  </div>
                 </div>
                  <div class="col-md-4 col-lg-4">
                    <div class="form-group form-control-container">
                      <label class="control-label">Name</label>
                      <input type="text" name="name" class="form-control" value="">
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-4">
                    <div class="form-group form-control-container">
                      <label class="control-label">Email</label>
                      <input type="text" name="email" class="form-control" value="">
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-4">
                    <div class="form-group form-control-container">
                      <label class="control-label">password</label>
                      <input type="password" name="password" class="form-control" value="">
                    </div>
                  </div>
                </div>
              </div>         
                <div class="col-md-4">
                  <div class="panel">
                    <div class="panel-heading">
                      <h3 class="panel-title">Picture</h3>
                    </div>
                    <div class="panel-body">
                      <div id="results">
                        @if(isset($member) && $member->image)
                        <img id="imageprev" src="images" />
                        @endif
                      </div>
                      <br />
                      <a class="btn btn-primary" data-toggle="modal" href='#camera-modal'>Take Picture</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    <div class="col-md-8 text-right">
      <button type="submit" id="submit-form" class="btn btn-primary">Submit</button>
    </div>

    <div class="modal fade" id="camera-modal">
      <div class="modal-dialog text-center">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Picture</h4>
          </div>
          <div class="modal-body">
            <div id="webcam" class="center-block"></div>
            <input type=button class="btn btn-primary" value="Take Snapshot" onClick="take_snapshot()">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


  </form>
</div>