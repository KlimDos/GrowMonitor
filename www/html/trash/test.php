<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.test.css">
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	
	<script type="text/javascript">
      google.charts.load('current', {'packages':['annotationchart']});
  //    google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart2()  {
            var json = $.ajax({
					url: '4.php',
					dataType: 'json',
					async: false
				}).responseText;
          
        var data = new google.visualization.DataTable(json);
        var chart = new google.visualization.AnnotationChart(document.getElementById('tnh'));
        var options = {
          displayAnnotations: true,
          max: 100,
          min: 0,
          colors: ['red', 'blue'],
	      fill: 10,
	      thickness: 3,
        };
        chart.draw(data, options);
      }
    </script>  
	</head>
	<body>
		<!-- <div id="main"> -->
			<div id="menu">menu</div>
			<div id="calender">cal</div>
			<div id="lyout">
					<div id="meters">1
					<!-- <div id="Tm">Tm</div>
						<div id="Hm">Hm</div>
						<div id="w1m">w1m</div>
						<div id="w2m">w2m</div>
						<div id="l1m">l1m</div>
						<div id="l2m">l2m</div>
						<div id="relays">relays</div>-->
					</div>
					<div id="cam_tnh">2
						<!--<div id="cam">cam</div>
						<div id="tnh">tnh</div>-->
					</div>
					<div id="graf">3
						<!--<div id="w1">w1</div>
						<div id="w2">w2</div>
						<div id="l1">l1</div>
						<div id="l2">l2</div>--> 
					</div>
			</div>
			<div id="last">last</div>
		<!-- </div>	 -->
	</body>
</html>
