@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-5" style="position:relative; top:-60px;">
      <div class="panel panel-default">
        <div class="panel-heading">Register</div>

        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <h5>Personal Information</h5>

            <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
              <label for="firstname" class="col-md-4 control-label">First Name</label>

              <div class="col-md-6">
                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                @if ($errors->has('firstname'))
                <span class="help-block">
                  <strong>{{ $errors->first('firstname') }}</strong>
                </span>
                @endif
              </div>
            </div>


            <div class="form-group{{ $errors->has('middlename') ? ' has-error' : '' }}">
              <label for="middlename" class="col-md-4 control-label">Middle Name</label>

              <div class="col-md-6">
                <input id="middlename" type="text" class="form-control" name="middlename" value="{{ old('middlename') }}" required autofocus>

                @if ($errors->has('middlename'))
                <span class="help-block">
                  <strong>{{ $errors->first('middlename') }}</strong>
                </span>
                @endif
              </div>
            </div>


            <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
              <label for="lastname" class="col-md-4 control-label">Last Name</label>

              <div class="col-md-6">
                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                @if ($errors->has('lastname'))
                <span class="help-block">
                  <strong>{{ $errors->first('lastname') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
              <label class="col-md-4 control-label">Gender</label>
              <div class="col-md-6">
                <select name="gender" class="form-control">
                  <option value="male" {{ old('gender')=='male'?'selected':'' }}>
                    Male</option>
                  <option value="female" {{ old('gender')=='female'?'selected':'' }}>
                    Female</option>
                </select>

                @if ($errors->has('gender'))
                <span class="help-block">
                  <strong>{{ $errors->first('gender') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
              <label class="col-md-4 control-label">Status</label>
              <div class="col-md-6">
                <select name="status" class="form-control">
                  <option value="single" {{ old('status')=='single'?'selected':'' }}>
                    Single</option>
                  <option value="married" {{ old('status')=='married'?'selected':'' }}>
                    Married</option>
                  <option value="widowed" {{ old('status')=='widowed'?'selected':'' }}>
                    Widowed</option>
                  <option value="widower" {{ old('status')=='widower'?'selected':'' }}>
                    Widower</option>
                </select>


                @if ($errors->has('status'))
                <span class="help-block">
                  <strong>{{ $errors->first('status') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('school') ? ' has-error' : '' }}">
              <label for="school" class="col-md-4 control-label">School ID</label>

              <div class="col-md-6">
                <input id="school" type="number" class="form-control" name="school" value="{{ old('school') }}" required autofocus>

                @if ($errors->has('school'))
                <span class="help-block">
                  <strong>{{ $errors->first('school') }}</strong>
                </span>
                @endif
              </div>
            </div>



            <hr />

            <h5>Login Information</h5>


            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Username</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">E-Mail Address</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">Password</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
            </div>

            <hr />

            <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
              <label class="col-md-4 control-label">Role</label>
              <div class="col-md-6">
                <select name="role" class="form-control">
                  <option value="principal" {{ old('role')=='principal'?'selected':'' }}>
                    Principal</option>
                  <option value="teacher" {{ old('role')=='teacher'?'selected':'' }}>
                    Teacher</option>
                </select>

                @if ($errors->has('role'))
                <span class="help-block">
                  <strong>{{ $errors->first('role') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  Register
                </button>
                <i class="bi bi-link"> <a href="{{ route('login') }}">Login</a></i>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection