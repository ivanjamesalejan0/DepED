<?php
$school_list = DB::table('tbl_schools')->get();
?>

<script>
requiredCSS = [
  'assets/vendor/sweetalert2/sweetalert2.css',
];

loadCSS(requiredCSS);

requiredJS = [
  'assets/scripts/members/member-form.setup.js',
];

loadJS(requiredJS);
var returnURL = 'admin/home';
</script>

<div class="row">
  <form id="app-form" class="form-horizontal" role="form" method="POST" action="views/admin/users{{isset($info)?'/'.$user->id:''}}" autocomplete="off" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="">
    <input type="hidden" name="image" value="">

    @if(isset($info))
    <input type="hidden" name="_method" value="patch">
    <input type="hidden" name="id" value="{{$user->id}}">
    <input type="hidden" name="info_id" value="{{$info->id}}">
    @endif

    <div class="col-md-12">
      <div class="row">
        <div class="col-md-6">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Personal Information</h3>
            </div>
            <div class="panel-body">

              <div class="container-fluid">
                <div class="col-md-4 col-lg-4">
                  <div class="form-group form-control-container">
                    <label class="control-label">First Name</label>
                    <input type="text" name="firstname" class="form-control" required value="{{$info->firstname ?? ''}}">
                  </div>
                </div>
                <div class="col-md-4 col-lg-4">
                  <div class="form-group form-control-container">
                    <label class="control-label">Middle Name</label>
                    <input type="text" name="middlename" class="form-control" required value="{{$info->middlename ?? ''}}">
                  </div>
                </div>
                <div class="col-md-4 col-lg-4">
                  <div class="form-group form-control-container">
                    <label class="control-label">Last Name</label>
                    <input type="text" name="lastname" class="form-control" required value="{{$info->lastname ?? ''}}">
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-lg-4">
                <div class="form-group form-control-container {{isset($user) && $user->role=='admin'?'hidden':''}} hide-if-admin">
                  <label class="control-label">Gender</label>
                  <select name="gender" class="form-control">
                    <option value="male" {{isset($info) && $info->gender=='male'? 'selected': ''}}>
                      Male</option>
                    <option value="female" {{isset($info) && $info->gender=='female'? 'selected': ''}}>
                      Female</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4 col-lg-4">
                <div class="form-group form-control-container {{isset($user) && $user->role=='admin'?'hidden':''}} hide-if-admin">
                  <label class="control-label">Civil Status</label>
                  <select name="status" class="form-control">
                    <option value="single" {{isset($info) && $info->status=='single'? 'selected': ''}}>
                      Single</option>
                    <option value="married" {{isset($info) && $info->status=='married'? 'selected': ''}}>
                      Married</option>
                    <option value="widowed" {{isset($info) && $info->status=='widowed'? 'selected': ''}}>
                      Widowed</option>
                    <option value="widower" {{isset($info) && $info->status=='widower'? 'selected': ''}}>
                      Widower</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4 col-lg-4">
                <div class="form-group form-control-container">
                  <label class="control-label">Role</label>

                  <select id="input-user-role" name="role" class="form-control">
                    @if(isset($user) && $user->role=='admin')
                    <option value="admin" {{isset($user) && $user->role=='admin'? 'selected': ''}}>
                      Admin</option>
                    @else
                    <option value="principal" {{isset($user) && $user->role=='principal'? 'selected': ''}}>
                      Principal</option>
                    <option value="teacher" {{isset($user) && $user->role=='teacher'? 'selected': ''}}>
                      Teacher</option>
                    <option value="admin" {{isset($user) && $user->role=='admin'? 'selected': ''}}>
                      Admin</option>
                    @endif
                  </select>
                </div>
              </div>
              <div class="col-md-4 col-lg-4">
                <div class="form-group form-control-container {{isset($user) && $user->role=='admin'?'hidden':''}} hide-if-admin">
                  <label class="control-label">School</label>
                  <select name="school" class="form-control">
                    @foreach($school_list as $s)
                    <option value="{{$s->school_id}}" {{isset($info) && $s->school_id==$info->school ? 'selected':''}}> {{$s->school_name}} </option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Login Information</h3>
            </div>
            <div class="panel-body">

              <div class="container-fluid">
                <div class="col-md-4 col-lg-4">
                  <div class="form-group form-control-container">
                    <label class="control-label">Username</label>
                    <input type="text" name="name" class="form-control" value="{{$user->name ?? ''}}">
                  </div>
                </div>
                <div class="col-md-4 col-lg-4">
                  <div class="form-group form-control-container">
                    <label class="control-label">Email</label>
                    <input type="text" name="email" class="form-control" value="{{$user->email ?? ''}}" required>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="col-md-4 col-lg-4">
                  <div class="form-group form-control-container">
                    <label class="control-label">Activate</label>

                    <select name="active" class="form-control">
                      <option value="1" {{isset($user) && $user->active? 'selected': ''}}>
                        Activate</option>
                      <option value="0" {{isset($user) && !$user->active? 'selected': ''}}>
                        Inactive</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="container-fluid">
                <div class="col-md-4 col-lg-4">
                  <div class="form-group form-control-container">
                    <label class="control-label">Password</label>
                    <input type="password" name="password" required class="form-control" value="">
                  </div>
                </div>
                <div class="col-md-4 col-lg-4">
                  <div class="form-group form-control-container">
                    <label class="control-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" required class="form-control" value="">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 text-right">
      <button type="submit" id="submit-form" class="btn btn-primary"> {{ isset($info) ? 'Update User': 'Add User' }}</button>
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