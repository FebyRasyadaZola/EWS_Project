<html>
    <head>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
  
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
          ['Waktu', 'WaterLevel'],
          ['2021-11-5 1:15:0',30],['2021-11-5 4:5:0',41],['2021-11-5 1:45:0',41],['2021-11-5 3:30:0',41],['2021-11-5 3:35:0',35],['2021-11-5 2:15:0',10],['2021-11-5 1:35:0',29],['2021-11-5 9:35:0',39],['2021-11-5 1:0:0',25],['2021-11-5 3:30:0',25],['2021-11-5 2:30:0',46],['2021-11-5 1:50:0',34],['2021-11-5 5:0:0',20],['2021-11-5 1:20:0',37],['2021-11-5 3:55:0',29],['2021-11-5 1:5:0',23],['2021-11-5 5:15:0',39],['2021-11-5 4:45:0',14],['2021-11-5 13:5:0',27],['2021-11-5 3:20:0',38],['2021-11-5 7:0:0',31],['2021-11-5 0:30:0',57],['2021-11-5 6:20:0',27],['2021-11-5 9:30:0',35],['2021-11-5 1:30:0',30],['2021-11-5 3:0:0',22],['2021-11-5 8:55:0',42],['2021-11-5 0:0:0',37],['2021-11-5 2:5:0',42],['2021-11-5 0:15:0',17],['2021-11-5 0:5:0',30],['2021-11-5 10:0:0',31],['2021-11-5 0:20:0',17],['2021-11-5 1:10:0',35],['2021-11-5 5:25:0',29],['2021-11-5 2:45:0',43],['2021-11-5 4:35:0',29],['2021-11-5 9:25:0',30],['2021-11-5 0:55:0',36],['2021-11-5 3:25:0',33],['2021-11-5 7:10:0',25],['2021-11-5 8:50:0',46],['2021-11-5 10:20:0',28],['2021-11-5 6:15:0',21],['2021-11-5 7:55:0',24],['2021-11-5 11:15:0',42],['2021-11-5 11:20:0',32],['2021-11-5 7:15:0',21],['2021-11-5 2:0:0',23],['2021-11-5 0:30:0',32],['2021-11-5 0:35:0',40],['2021-11-5 2:25:0',40],['2021-11-5 0:25:0',22],['2021-11-5 8:15:0',25],['2021-11-5 6:30:0',30],['2021-11-5 2:35:0',28],['2021-11-5 2:30:0',34],['2021-11-5 4:20:0',48],['2021-11-5 12:0:0',28],['2021-11-5 1:20:0',27],['2021-11-5 1:25:0',28]  ]);  
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
  