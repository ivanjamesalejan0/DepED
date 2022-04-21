$(function () {
  
  Chart.defaults.global.defaultFontColor = '#a0aeba';
  var ctxLineChart = document.getElementById("yearly-chart").getContext("2d");

  const chartLabels = ['January', 'February', 'March', 'April', 'May', 'June','July','August', 'September', 'October', 'November', 'December']
  
  var scalesOptions = {
    xAxes: [{
      gridLines: {
        display: false
      }
    }],
    yAxes: [{
      gridLines: {
        color: '#eff3f6',
        drawBorder: false,
      },
    }]
  };

  var lineChart = new Chart(ctxLineChart, {
    type: 'line',
    data: {
      labels: chartLabels,
      datasets: [{
          data: count_ss,
          label: 'Small Scale',
          fill: false,
          borderWidth: 2,
          pointRadius: 3,
          pointHoverRadius: 5,
          borderColor: '#3498DB',
          backgroundColor: '#fff',
        },
        {
          data: count_ls,
          label: 'Large Scale',
          fill: false,
          borderWidth: 2,
          pointRadius: 3,
          pointHoverRadius: 5,
          borderColor: '#F1C40F',
          backgroundColor: '#fff',
        },
        {
          data: count_ac,
          label: 'Armed Conflict',
          fill: false,
          borderWidth: 2,
          pointRadius: 3,
          pointHoverRadius: 5,
          borderColor: '#D35400',
          backgroundColor: '#fff',
        }
      ]
    },
    options: {
      responsive: true,
      scales: scalesOptions,
      elements: {
        line:{
          tension: 0
        }
      }
    }
  });

  $('#geo-total-datatable').dataTable({
    sDom: "<'row'<'col-sm-6'l><'col-sm-6'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
  });

  $('#school-total-datatable').dataTable({
    sDom: "<'row'<'col-sm-6'l><'col-sm-6'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
  });
  
});