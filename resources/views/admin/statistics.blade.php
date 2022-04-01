<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          [ 'Small-Scale', 'Armed-Conflict', 'Large-Scale'],
          ['January', 10, 10, 20],
          ['February', 20, 30, 7],
          ['March', 0, 0, 0],
          ['April', 0, 0, 0],
          ['May', 0, 0, 0],
          ['June', 0, 0, 0],
          ['July', 0, 0, 0],
          ['August', 0, 0, 0],
          ['September', 0, 0, 0],
          ['October', 0, 0, 0],
          ['November', 0, 0, 0],
          ['December', 0, 0, 0]
        ]);
        
        var options = {
          chart: {
           // title: 'Statistic',
           // subtitle: 'QWERT ASDFGJKL',
          },
          
          bars: 'vertical',
          vAxis: {title: 'Number of Submitted Reports'},   
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

                chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>

        <div class="container">  
            <h3 align="center">Submitted Reports Statistic</h3>  
            <br />  
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-9">
                            <h3 class="panel-title">Monthy Data</h3>
                        </div>
                        <div class="col-md-3">
                            <select name="year" class="form-control" id="year">
                                <option value="">2022</option>
                            
                            </select>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div id="barchart_material" style="width: 700px; height: 220px;"></div>
                </div>
            </div>
        </div>   
  </body>
</html>