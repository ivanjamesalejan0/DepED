@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-5" style="position:relative; top:-60px;">
      <div class="panel panel-default">
        <div class="panel-heading">Registration Complete!</div>

        <div class="panel-body">
          <p>
            Your registration request has been completed.
            We will review your registration, and will notify you when your request has been approved.
          </p>
          <p>
            Thank you for your patience!
          </p>
          <p>
            <strong>- DepEd</strong>
          </p>
          <p>
            <a class="btn btn-primary" href="{{ route('login') }}">Back to Login</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection