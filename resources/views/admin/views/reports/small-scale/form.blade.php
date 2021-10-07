<script>
var requiredCSS = [
  "{{ asset('theme/vendor/sweetalert2/sweetalert2.css') }}"
];
loadCSS(requiredCSS);

var requiredJS = [
  "{{ asset('theme/vendor/sweetalert2/sweetalert2.js') }}",
  "{{ asset('theme/scripts/admin/reports/reports-form.js') }}"
];
loadJS(requiredJS);




</script>
<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">Add Report</h3>
  </div>
  <div class="panel-body">

    @if(isset($data) && $data['success'])
    <p class="alert alert-info"><i class="fa fa-info-circle"></i> {{ $data['message'] }}</p>
    @elseif(isset($data) && !$data['success'])
    <p class="alert alert-danger"><i class="fa fa-warning"></i> {{ $data['message'] }}</p>
    @endif

    <div class="row">
      <div class="col-md-6">

        <!-- BASIC TABS -->
        <h4>Small Scale Disaster Report</h4>
        <ul class="nav nav-tabs hidden" role="tablist">
          <li class="active"><a href="#page1" role="tab" data-toggle="tab">Page 1</a></li>
          <li><a href="#page2" role="tab" data-toggle="tab">Page 2</a></li>
        </ul>
        <form method="POST" id="app-form" action="views/admin/reports/{{$report->id ?? ''}}" autocomplete="off"
          enctype="multipart/form-data">
          {{ csrf_field() }}
          @if(isset($report->id))
          <input id="report-id" name="id" type="hidden" value="{{$report->id}}" />
          <input type="hidden" name="_method" value="PUT">
          @endif
          <input type="hidden" name="report-type" value="small-scale">
          <div class="tab-content">
            <div class="tab-pane fade in active" id="page1">
              <h5>Page 1</h5>
              <hr />
              @include('admin.views.reports.small-scale.tabs.page1', ['report' => $report ?? []])


              <div class="form-group row">
                <div class="col-xs-6">
                  <a href="#page2" role="tab" data-toggle="tab" class="btn btn-primary">Next <span
                      class="ti-arrow-circle-right"></span></a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="page2">
              <h5>Page 2</h5>
              <hr />
              @include('admin.views.reports.small-scale.tabs.page2', ['report' => $report ?? []])

              <div class="form-group row">
                <div class="col-xs-6">
                  <a href="#page1" role="tab" data-toggle="tab" class="btn btn-default"><span
                      class="ti-arrow-circle-left"></span> Previous</a>
                </div>
                <div class="col-xs-6 text-right">
                  <button class="btn btn-default" id="cancel-report-creation">Cancel</button>
                  <button type="submit" id="submit-form" class="btn btn-success">Submit <span
                      class="fa fa-check"></span></button>
                </div>
              </div>

            </div>
          </div>
        </form>
        <!-- END BASIC TABS -->

      </div>
    </div>
  </div>
</div>