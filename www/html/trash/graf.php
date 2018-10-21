<html>
	<head>
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
			google.load('visualization', '1', {'packages':['corechart']});
			google.setOnLoadCallback(drawChart);

			function drawChart() {
				var json = $.ajax({
					url: '4.php',
					dataType: 'json',
					async: false
				}).responseText;
				
				//var formatter3 = new google.visualization.DateFormat({pattern: "yyyy-MM-dd hh:mm:ss"}); //2017-03-30 12:00:32
				
				var data = new google.visualization.DataTable(json);
				//data.addColumn('date', 'X');
				//formatter3.format(data);
				var options = {
					hAxis: {
						title: 'Temperature and Humidity'
						//gridlines: {color: '#333', count: 4},
						
						},
					vAxis: {
						title: 'Value',
						//logScale: true
						//ticks: [5,10,15,20],
						},
					explorer: { 
						actions: ['dragToZoom', 'rightClickToReset'],
						axis: 'horizontal',
						keepInBounds: true,
						maxZoomIn: 4.0
                            },
                    lineWidth: 5,
                  //  dataOpacity: 0.1,
                    crosshair: {
                                color: '#000',
                                trigger: 'selection'
                            },
                            
                 //   backgroundColor.stroke: "red',
               //  chartArea.backgroundColor: 'blue' ,
                 // #000,
                 
                // hAxis.gridlines: {color: '#333', count: 4},
					series: {
					    0: {color: 'red' , curveType: 'function'},
						1: {color: 'blue' , curveType: 'function'}
						}
					}
				var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
				chart.draw(data, options);
			}
		</script>  
	</head>
	<body>
		<div id="chart_div" style="width: 1200px; height: 500px;"></div>
	</body>
</html>
