$(function () {
  $.validate({});

  var drEvent = $('#dropify-event').dropify();
	drEvent.on('dropify.beforeClear', function(event, element) {
		return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
	});

  $('#input-user-role').on('change', function(e){
    const value = $(this).val();
    if(value == 'admin'){
      $('.hide-if-admin').addClass('hidden');
    }else{
      $('.hide-if-admin').removeClass('hidden');
    }
  })

  $('#app-form').on('submit', function (e) {
    e.preventDefault();
    swal({
      title: 'Processing',
      text: 'Please wait...',
      allowOutsideClick: false,
      showConfirmButton: false,
      showCancelButton: false,
      onOpen: () => {
        swal.showLoading();
        var formData = new FormData(this);
        $.ajax({
            url: $('#app-form').attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function (xhr) {
              if ($('#app-form').find('.has-error .error').length > 0) {
                xhr.abort();
              }
              xhr.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
            }
          })
          .success(function (data) {
            if (data.success === true) {
              var message = $("<div class='text-left'></div>").html(data.message);
              var ul = $("<ul></ul>");
              $.each(data.data, function (index, val) {
                ul.append('<li><strong>' + index + '</strong></li>');
                var ul_ul = $("<ul></ul>");
                $.each(val, function (i, v) {
                  ul_ul.append('<li>' + v + '</li>');
                });
                ul.append(ul_ul);
              });
              message.append(ul);
              swal({
                title: data.title,
                html: message,
                type: 'success',
                allowOutsideClick: false
              }).then(function () {
                loadView(returnURL);
              }).catch(swal.noop);
            } else {
              $('#app-form .help-block.form-error').remove();
              $('#app-form .form-control-container').removeClass('has-error');
              var message = $("<div class='text-left'></div>").html(data.message);
              var ul = $("<ul></ul>");
              $.each(data.errors, function (index, val) {
                ul.append('<li><strong>' + index + '</strong></li>');
                var ul_ul = $("<ul></ul>");
                $.each(val, function (i, v) {
                  ul_ul.append('<li>' + v + '</li>');
                  $('#app-form *[name="' + index + '"]').parents('.form-control-container').append('<div class="help-block form-error">' + v + '</div>');
                });
                $('#app-form *[name="' + index + '"]').parents('.form-control-container').addClass('has-error');
                ul.append(ul_ul);
              });
              message.append(ul);
              swal({
                title: data.title,
                html: message,
                type: 'error',
                allowOutsideClick: false
              }).catch(swal.noop);
            }
            $('#submit-form').removeClass('disabled');
          })
          .fail(function (data) {
            if (data.statusText != "canceled") {
              if (data.status === 422) {
                $('#app-form .help-block.form-error').remove();
                $('#app-form .form-control-container').removeClass('has-error');
                var message = $("<div class='text-left'></div>").html(data.responseJSON.message);
                var ul = $("<ul></ul>");
                $.each(data.responseJSON.errors, function (index, val) {
                  ul.append('<li><strong>' + index + '</strong></li>');
                  var ul_ul = $("<ul></ul>");
                  $.each(val, function (i, v) {
                    ul_ul.append('<li>' + v + '</li>');
                    $('#app-form *[name="' + index + '"]').parents('.form-control-container').append('<div class="help-block form-error">' + v + '</div>');
                  });
                  $('#app-form *[name="' + index + '"]').parents('.form-control-container').addClass('has-error');
                  ul.append(ul_ul);
                });
                message.append(ul);
                swal({
                  title: "Oops! Something went wrong",
                  html: message,
                  type: 'error',
                  allowOutsideClick: false
                }).catch(swal.noop);
              } else {
                swal({
                  title: "Oops! Something went wrong",
                  html: "Please try again",
                  type: 'error',
                  allowOutsideClick: false
                }).catch(swal.noop);
              }
              $('#submit-form').removeClass('disabled');
            }
          })
          .complete(function (v) {});
        }
      },
      function() {});
  })

});

