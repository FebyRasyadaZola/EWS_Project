<html>
    <head>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
  
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
          ['Waktu', 'Humidity'],
          ['2021-11-5 7:45:0',40],['2021-11-5 0:15:0',25],['2021-11-5 14:15:0',57],['2021-11-5 2:30:0',44],['2021-11-5 2:15:0',56],['2021-11-5 5:35:0',39],['2021-11-5 7:50:0',28],['2021-11-5 0:5:0',50],['2021-11-5 1:45:0',53],['2021-11-5 5:30:0',45],['2021-11-5 0:55:0',51],['2021-11-5 3:50:0',35],['2021-11-5 0:20:0',65],['2021-11-5 4:15:0',36],['2021-11-5 0:0:0',45],['2021-11-5 1:30:0',41],['2021-11-5 0:35:0',55],['2021-11-5 8:25:0',29],['2021-11-5 5:30:0',47],['2021-11-5 1:50:0',32],['2021-11-5 0:45:0',47],['2021-11-5 10:10:0',65],['2021-11-5 5:10:0',36],['2021-11-5 2:25:0',48],['2021-11-5 2:20:0',56],['2021-11-5 11:25:0',43],['2021-11-5 1:10:0',66],['2021-11-5 4:0:0',58],['2021-11-5 5:5:0',50],['2021-11-5 9:35:0',64],['2021-11-5 0:10:0',65],['2021-11-5 0:30:0',39],['2021-11-5 2:10:0',56],['2021-11-5 3:0:0',49],['2021-11-5 1:55:0',25],['2021-11-5 1:35:0',38],['2021-11-5 6:0:0',58],['2021-11-5 2:35:0',52],['2021-11-5 0:30:0',24],['2021-11-5 1:30:0',47],['2021-11-5 4:10:0',61],
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
  