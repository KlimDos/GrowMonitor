<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
		
 
      google.charts.load('current', {'packages':['annotationchart']});
  //    google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Date');
        data.addColumn('number', 'Kepler-22b mission');
        data.addColumn('string', 'Kepler title');
       //data.addColumn('string', 'Kepler text');
        data.addColumn('number', 'Gliese 163 mission');
        data.addColumn('string', 'Gliese title');
        data.addColumn('string', 'Gliese text');
        data.addRows([
          [new Date(2314, 2, 15), 12400, undefined, 10645, undefined, undefined],
          [new Date(2314, 2, 16), 24045, 'Lalibertines',12374, undefined, undefined],
          [new Date(2314, 2, 17), 35022, 'Lalibertines',15766, 'Gallantors', 'First Encounter'],
          [new Date(2314, 2, 18), 12284, 'Lalibertines',34334, 'Gallantors', 'Statement of shared principles'],
          [new Date(2314, 2, 19), 8476, 'Lalibertines',66467, 'Gallantors', 'Mysteries revealed'],
          [new Date(2314, 2, 20), 0, 'Lalibertines',79463, 'Gallantors', 'Omniscience achieved']
        ]);

        var chart = new google.visualization.AnnotationChart(document.getElementById('chart_div'));

        var options = {
          displayAnnotations: true,
          max: 100,
          min: 0,
        };

        chart.draw(data, options);
      }
      
      function drawChart2() {
            
            
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
	<div id="menu">menu</div>
<div id="calender">cal</div>

<div id="meters">
	<div id="Tm">Tm</div>
	<div id="Hm">Hm</div>
	<div id="w1m">w1m</div>
	<div id="w2m">w2m</div>
	<div id="l1m">l1m</div>
	<div id="l2m">l2m</div>
	<div id="relays">relays</div>
</div>
<div id="cam_tnh">
	<div id="cam">cam</div>
	<div id="tnh">tnh
		
	</div>
</div>

<div id="graf">
	<div id="w1">w1</div>
	<div id="w2">w2</div>
	<div id="l1">l1</div>
	<div id="l2">l2</div>
</div>
	</body>
</html>
