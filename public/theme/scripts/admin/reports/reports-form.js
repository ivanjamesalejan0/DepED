$('#cancel-report-creation').on('click', function (e) {
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
  }).then(function () {
    loadView('admin/reports');
  }, function (dismiss) {
    //do nothing
  });
});

$('#app-form').on('submit', function (e) {
  e.preventDefault();
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
          beforeSend: function (xhr) {
            if ($(this).find('.has-error .error').length > 0) {
              xhr.abort();
            }
            xhr.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
          }
        }).success(function (data) {
          swal({
            title: 'Success!',
            text: 'Report has been Submitted Successfully',
            type: 'success',
            allowOutsideClick: false,
          }).then(function () {
            loadView('admin/reports/create');
          }).catch(swal.noop);
        }).error(function (data) {
          swal({
            title: 'Oops! Something went wrong',
            text: 'Please Double check your form',
            type: 'error',
            allowOutsideClick: false,
          }).then(function () {
            
          }).catch(swal.noop);
        }).complete(function (data) {
          $('#submit-form').removeClass('disabled');
        });
      }
    },
    function () {});
});

$("select[name='natural-hazards']").on('change', function(e){
  $('#natural-hazard-specific-others').addClass('hidden');
  if(e.target.value == 'Others, please specify'){
    $('#natural-hazard-specific-others').removeClass('hidden');
  }
});

$("select[name='human-indicated-hazards']").on('change', function(e){
  $('#human-indicated-hazards-others').addClass('hidden');
  if(e.target.value == 'Others, please specify'){
    $('#human-indicated-hazards-others').removeClass('hidden');
  }
});


$("select[name='school-at-evalation-center']").on('change', function(e){
  $('#school-is-used-as-evaluation').addClass('hidden');
  if(e.target.value == 'Yes'){
    $('#school-is-used-as-evaluation').removeClass('hidden');
  }
});

$("select[name='suspention']").on('change', function(e){
  $('#class-was-suspended').addClass('hidden');
  if(e.target.value == 'Yes'){
    $('#class-was-suspended').removeClass('hidden');
  }
});

$(".school-level-numbers").on('change', function(e){
  
  let parent = $(this).parent('.school-furniture-group')[0];
  let numbers = $(parent).children('.school-level-numbers');
  let total = $(parent).children('.school-level-total')[0];
  let t = 0;
  numbers.each(e => {
    let val = parseInt($(numbers)[e].value);
    if( !isNaN(val) ){
      t += val;
    }
  });
  $(total).html(t.toString());
});
