$(function () {

  // datatable with paging options and live search
  $.dataTable = $('#reports-list-datatable').dataTable({
    'scrollY': false,
    'scrollCollapse': true,
    'paging': true,
    'autoWidth': false,
    'select': 'multi',
    'scrollX': true,
    'lengthMenu': [
      [15, 30, 50, -1],
      [15, 30, 50, "All"]
    ],
    'dom': '<<"row" <"col-sm-3 text-left dt-search"><"col-sm-9 text-right" B>><t><"row" <"col-sm-6 text-left" l><"col-sm-6 text-right" pi>>>',
    'serverSide': false,
    'processing': false,
    'colReorder': true,
    'responsive': false,
    'fixedHeader': false,
    'buttons': {
      'name': 'dt-buttons',
      'className': 'btn btn-info btn-xs',
      'buttons': [{
          extend: 'collection',
          text: 'Export',
          className: 'fa fa-download hidden',
          buttons: [{
              text: 'Export to CSV',
              className: 'fa fa-file-excel-o',
              extend: 'csvHtml5',
              exportOptions: {
                columns: ':visible'
              }
            },
            {
              text: 'Export to Excel',
              className: 'fa fa-table',
              extend: 'excel',
              exportOptions: {
                columns: ':visible'
              }
            },
            {
              text: 'Export to PDF',
              className: 'fa fa-file-pdf-o',
              extend: 'pdf',
              exportOptions: {
                columns: ':visible'
              }
            }
          ],
          fade: false,
          autoclose: true
        },
        {
          text: 'Print',
          className: 'fa fa-print hidden',
          extend: 'print',
          exportOptions: {
            columns: ':visible'
          }
        },
        {
          text: 'Copy',
          className: 'fa fa-clipboard hidden',
          extend: 'copyHtml5',
          exportOptions: {
            columns: ':visible'
          }
        },
        {
          text: 'Reload',
          className: 'fa fa-refresh',
          action: function (e, dt, node, config) {
            $.dataTable.ajax.reload();
          }
        },
        {
          text: 'Refresh',
          className: 'fa fa-table',
          action: function (e, dt, node, config) {
            $.dataTable.columns.adjust();
          }
        },
        {
          text: 'Select All',
          className: 'fa fa-check-circle-o',
          extend: 'selectAll',
        },
        {
          text: 'Select None',
          className: 'fa fa-circle-o',
          extend: 'selectNone',
        },
        {
          text: 'Columns',
          className: 'fa fa-eye',
          extend: 'colvis',
          postfixButtons: ['colvisRestore']
        },
        {
          extend: 'collection',
          text: 'Add Report',
          className: 'fa fa-plus',
          buttons: [
            {
              text: 'Small Scale',
              className: 'fa',
              action: function (e, dt, node, config) {
                loadView('admin/reports/create?type=small-scale');
              }
            },
            {
              text: 'Large Scale',
              className: 'fa',
              action: function (e, dt, node, config) {
                loadView('admin/reports/create?type=large-scale');
              }
            },
            {
              text: 'Armed Conflict',
              className: 'fa',
              action: function (e, dt, node, config) {
                loadView('admin/reports/create?type=armed-conflict');
              }
            },
          ],
          fade: false,
          autoclose: true
        },
        {
          text: 'Edit',
          className: 'edit-row fa fa-edit',
        },
        {
          text: 'Delete',
          className: 'delete-row fa fa-trash'
        }
      ]
    }
  });

});