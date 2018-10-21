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
				
				var data = new google.visualization.DataTable(json);

				var options = {
					hAxis: {
						title: 'Temperature and Humidity'
						},
					vAxis: {
						title: 'Value'
						},
					explorer: { 
						actions: ['dragToZoom', 'rightClickToReset'],
						axis: 'horizontal',
						keepInBounds: true,
						maxZoomIn: 4.0
                            },
                    lineWidth: 5,
                    crosshair: {
                                color: '#000',
                                trigger: 'selection'
                            },
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
