<script>
var requiredCSS = [
  "{{ asset('theme/vendor/sweetalert2/sweetalert2.css') }}"
];
loadCSS(requiredCSS);

var requiredJS = [
  "{{ asset('theme/vendor/sweetalert2/sweetalert2.js') }}"
];
loadJS(requiredJS);

$('body').on('click', '#cancel-report-creation', function(e) {
  e.preventDefault();
  swal({
    title: 'Confirm Cancel',
    text: "Are you sure you don't want to save changes?",
    type: 'warning',
    allowOutsideClick: false,
    showCancelButton: true,
    confirmButtonColor: '#F9354C',
    cancelButtonColor: '#41B314',
    confirmButtonText: "Yes, don't save!"
  }).then(function() {
    $('.swal2-shown').removeClass('swal2-shown');
    loadView('admin/reports');
  }, function(dismiss) {
    //do nothing
  });
});



$('body').on('submit', '#app-form', function(event) {
  event.preventDefault();
  swal({
      title: 'Processing',
      text: 'Please wait...',
      allowOutsideClick: false,
      type: null,
      closeOnConfirm: false,
      closeOnCancel: false,
      showConfirmButton: false,
      onOpen: () => {
        swal.showLoading()
        var formData = new FormData(this);
        $("#submit-form").addClass('disabled');
        $.ajax({
          url: $(this).attr('action'),
          type: 'POST',
          data: formData,
          processData: false,
          cache: false,
          contentType: false,
          beforeSend: function(xhr) {
            if ($('#app-form').find('.has-error .error').length > 0) {
              xhr.abort();
            }
            xhr.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
            $('body > div').not('#wrapper, .pace').remove();
            $.mainView.css({
              opacity: 0
            });
          }
        }).success(function(data) {
          $.mainView.html(data);

          // if main content is shorter than sidebar
          if ($('.main').innerHeight() < $('#sidebar-nav').innerHeight()) {
            $('.main').css('min-height', $('#sidebar-nav').innerHeight());
            $navbarHeight = $('.navbar').innerHeight();
            $('.main-content').css('height', 'calc(100vh - ' + $navbarHeight + 'px)');
            $('footer').css('position', 'absolute');
          } else {
            $('.main').css('min-height', '');
            $('.main-content').css('height', '');
            $('footer').css('position', '');
          }

          // make full height for layout top navigation
          if ($('body').hasClass('layout-topnav')) {

            $footerHeight = $('footer').innerHeight();
            $('.main').css('min-height', 'calc(100vh - ' + $footerHeight + 'px)');
          }
        }).complete(function(data) {
          $('.swal2-shown').removeClass('swal2-shown');
          $('#submit-form').removeClass('disabled');
          $.mainView.delay(250).animate({
            opacity: 1
          });
        });
      }
    },
    function() {});
});
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
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#page1" role="tab" data-toggle="tab">Page 1</a></li>
          <li><a href="#page2" role="tab" data-toggle="tab">Page 2</a></li>
        </ul>
        <form method="POST" id="app-form" action="views/admin/reports" autocomplete="off" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="tab-content">
            <div class="tab-pane fade in active" id="page1">
              @include('admin.views.reports.small-scale.tabs.page1')


              <div class="form-group row">
                <div class="col-xs-6">
                  <a href="#page2" role="tab" data-toggle="tab" class="btn btn-primary">Next <span
                      class="ti-arrow-circle-right"></span></a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="page2">
              @include('admin.views.reports.small-scale.tabs.page2')

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