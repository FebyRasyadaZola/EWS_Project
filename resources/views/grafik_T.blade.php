<html>
    <head>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
  
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
          ['Waktu', 'Temperature'],
          ['2021-11-5 4:55:0',46],['2021-11-5 0:30:0',75],['2021-11-5 2:15:0',48],['2021-11-5 2:10:0',74],['2021-11-5 0:25:0',36],['2021-11-5 1:0:0',80],['2021-11-5 1:35:0',37],['2021-11-5 7:35:0',36],['2021-11-5 0:10:0',40],['2021-11-5 3:0:0',61],['2021-11-5 7:10:0',37],['2021-11-5 7:30:0',47],['2021-11-5 1:30:0',51],['2021-11-5 2:45:0',70],['2021-11-5 0:0:0',52],['2021-11-5 1:30:0',50],['2021-11-5 8:25:0',41],['2021-11-5 0:50:0',51],['2021-11-5 6:30:0',55],['2021-11-5 0:55:0',52],['2021-11-5 2:30:0',80],['2021-11-5 3:50:0',41],['2021-11-5 0:5:0',66],['2021-11-5 0:20:0',67],['2021-11-5 1:25:0',56],['2021-11-5 1:10:0',51],['2021-11-5 0:35:0',71],['2021-11-5 6:50:0',44],['2021-11-5 4:15:0',42],['2021-11-5 4:45:0',46],['2021-11-5 1:15:0',38],['2021-11-5 8:5:0',57],['2021-11-5 2:5:0',70],['2021-11-5 0:45:0',53],['2021-11-5 3:5:0',55],['2021-11-5 1:50:0',44],
          ]);  
          var options = {
            title: 'Temperature Performance',
            curveType: 'function',
            legend: { position: 'bottom' }
          };
  
          var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
  
          chart.draw(data, options);
        }
      </script>
    </head>
    <body>
      <div id="curve_chart" style="width: 100%; height: 500px"></div>
    </body>
  </html>
  