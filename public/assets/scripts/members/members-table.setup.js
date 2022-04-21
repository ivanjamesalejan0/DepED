$(function () {
  // datatable with paging options and live search
  $('#featured-datatable').dataTable({
    sDom: "<'row'<'col-sm-6'l><'col-sm-6'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
  });
  $('#unfeatured-datatable').dataTable({
    sDom: "<'row'<'col-sm-6'l><'col-sm-6'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
  });
});

function deleteMember(id) {
  swal({
    title: 'Delete Member',
    text: 'Are you sure you want to delete this member? This cannot be undone.',
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#F9354C',
    cancelButtonColor: '#41B314',
    confirmButtonText: 'Delete',
    allowOutsideClick: false
  }).then(function () {
    $.ajax({
        url: 'views/admin/users/' + id,
        type: 'DELETE',
        dataType: 'json',
        data: $('#app-form').serialize(),
        beforeSend: function (xhr) {
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
  }).catch(swal.noop);

}
function approveMember(id) {
  swal({
    title: 'Activate Member',
    text: 'Are you sure you want to Activate this member?',
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#41B314',
    cancelButtonColor: '#F9354C',
    confirmButtonText: 'Activate',
    allowOutsideClick: false
  }).then(function () {
    $.ajax({
        url: 'views/admin/users/' + id,
        type: 'PATCH',
        dataType: 'json',
        data: {},
        beforeSend: function (xhr) {
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
  }).catch(swal.noop);

}
function deactivateMember(id) {
  swal({
    title: 'Deactivate Member',
    text: 'Are you sure you want to deactivate this member?',
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#41B314',
    cancelButtonColor: '#F9354C',
    confirmButtonText: 'Deactivate',
    allowOutsideClick: false
  }).then(function () {
    $.ajax({
        url: 'views/admin/users/' + id,
        type: 'PATCH',
        dataType: 'json',
        data: {},
        beforeSend: function (xhr) {
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
  }).catch(swal.noop);

}