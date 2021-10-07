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
        <h4>armed-conflict Disaster Report</h4>
        <ul class="nav nav-tabs hidden" role="tablist">
          <li class="active"><a href="#page1" role="tab" data-toggle="tab">Page 1</a></li>
          <li><a href="#page2" role="tab" data-toggle="tab">Page 2</a></li>
          <li><a href="#page3" role="tab" data-toggle="tab">Page 3</a></li>
          <li><a href="#page4" role="tab" data-toggle="tab">Page 4</a></li>
          <li><a href="#page5" role="tab" data-toggle="tab">Page 5</a></li>
          <li><a href="#page6" role="tab" data-toggle="tab">Page 6</a></li>
          <li><a href="#page7" role="tab" data-toggle="tab">Page 7</a></li>
          <li><a href="#page8" role="tab" data-toggle="tab">Page 7</a></li>
          <li><a href="#page9" role="tab" data-toggle="tab">Page 7</a></li>
        </ul>
        <form method="POST" id="app-form" action="views/admin/reports/{{$report->id ?? ''}}" autocomplete="off"
          enctype="multipart/form-data">
          {{ csrf_field() }}
          @if(isset($report->id))
          <input id="report-id" name="id" type="hidden" value="{{$report->id}}" />
          <input type="hidden" name="_method" value="PUT">
          @endif
          <input type="hidden" name="report-type" value="armed-conflict">
          <div class="tab-content">
            <div class="tab-pane fade in active" id="page1">
              <h5>Page 1</h5>
              <hr />
              @include('admin.views.reports.armed-conflict.tabs.page1', ['report' => $report ?? []])


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
              @include('admin.views.reports.armed-conflict.tabs.page2', ['report' => $report ?? []])

              <div class="form-group row">
                <div class="col-xs-6">
                  <a href="#page1" role="tab" data-toggle="tab" class="btn btn-default"><span
                      class="ti-arrow-circle-left"></span> Previous</a>
                </div>
                <div class="form-group row">
                <div class="col-xs-6">
                  <a href="#page3" role="tab" data-toggle="tab" class="btn btn-primary">Next <span
                      class="ti-arrow-circle-right"></span></a>
                </div>
              </div>
            </div>
            <hr>
            <div class="tab-pane fade" id="page3">
              <h5>Page 3</h5>
              <hr />
              @include('admin.views.reports.armed-conflict.tabs.page3', ['report' => $report ?? []])
              <div class="form-group row">
                <div class="col-xs-6">
                  <a href="#page4" role="tab" data-toggle="tab" class="btn btn-primary">Next <span
                      class="ti-arrow-circle-right"></span></a>
                </div>
              </div>
</div>
              <div class="form-group row">
                <div class="col-xs-6">
                  <a href="#page2" role="tab" data-toggle="tab" class="btn btn-default"><span
                      class="ti-arrow-circle-left"></span> Previous</a>
                </div>
                <div class="tab-pane fade" id="page4">
              <h5>Page 4</h5>
              <hr />
              @include('admin.views.reports.armed-conflict.tabs.page4', ['report' => $report ?? []])
              <div class="form-group row">
                <div class="col-xs-6">
                  <a href="#page5" role="tab" data-toggle="tab" class="btn btn-primary">Next <span
                      class="ti-arrow-circle-right"></span></a>
                </div>
              </div>
</div>
              <div class="form-group row">
                <div class="col-xs-6">
                  <a href="#page3" role="tab" data-toggle="tab" class="btn btn-default"><span
                      class="ti-arrow-circle-left"></span> Previous</a>
                </div>
                <div class="tab-pane fade" id="page5">
              <h5>Page 5</h5>
              <hr />
              @include('admin.views.reports.armed-conflict.tabs.page5', ['report' => $report ?? []])
              <div class="form-group row">
                <div class="col-xs-6">
                  <a href="#page6" role="tab" data-toggle="tab" class="btn btn-primary">Next <span
                      class="ti-arrow-circle-right"></span></a>
                </div>
              </div>    
        </div>
</div>
              <div class="form-group row">
                <div class="col-xs-6">
                  <a href="#page4" role="tab" data-toggle="tab" class="btn btn-default"><span
                      class="ti-arrow-circle-left"></span> Previous</a>
                </div>
                <div class="tab-pane fade" id="page6">
              <h5>Page 6</h5>
              <hr />
              @include('admin.views.reports.armed-conflict.tabs.page6', ['report' => $report ?? []])
              <div class="form-group row">
                <div class="col-xs-6">
                  <a href="#page7" role="tab" data-toggle="tab" class="btn btn-primary">Next <span
                      class="ti-arrow-circle-right"></span></a>
                </div>
              </div>
      </div>
              <div class="form-group row">
                <div class="col-xs-6">
                  <a href="#page5" role="tab" data-toggle="tab" class="btn btn-default"><span
                      class="ti-arrow-circle-left"></span> Previous</a>
                </div>
                <div class="tab-pane fade" id="page7">
              <h5>Page 7</h5>
              <hr />
              @include('admin.views.reports.armed-conflict.tabs.page7', ['report' => $report ?? []])
              <div class="form-group row">
                <div class="col-xs-6">
                  <a href="#page8" role="tab" data-toggle="tab" class="btn btn-primary">Next <span
                      class="ti-arrow-circle-right"></span></a>
                </div>
              </div>
</div>
</div>
              <div class="form-group row">
                <div class="col-xs-6">
                  <a href="#page6" role="tab" data-toggle="tab" class="btn btn-default"><span
                      class="ti-arrow-circle-left"></span> Previous</a>
                </div>
                <div class="tab-pane fade" id="page8">
              <h5>Page 8</h5>
              <hr />
              @include('admin.views.reports.armed-conflict.tabs.page8', ['report' => $report ?? []])
              <div class="form-group row">
                <div class="col-xs-6">
                  <a href="#page9" role="tab" data-toggle="tab" class="btn btn-primary">Next <span
                      class="ti-arrow-circle-right"></span></a>
                </div>
              </div>
      </div>
              <div class="form-group row">
                <div class="col-xs-6">
                  <a href="#page7" role="tab" data-toggle="tab" class="btn btn-default"><span
                      class="ti-arrow-circle-left"></span> Previous</a>
                </div>
                <div class="tab-pane fade" id="page9">
              <h5>Page 9</h5>
              <hr />
              @include('admin.views.reports.armed-conflict.tabs.page9', ['report' => $report ?? []])
              <div class="form-group row">
                <div class="col-xs-6">
                  <a href="#page8" role="tab" data-toggle="tab" class="btn btn-default"><span
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
</div>