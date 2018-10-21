  <script type="text/javascript">
		google.charts.load('current', {'packages':['annotationchart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart()  {
            var json = $.ajax({
					url: 'tnh_json.php',
					dataType: 'json',
					async: false
				}).responseText;          
        var data = new google.visualization.DataTable(json);
        var chart = new google.visualization.AnnotationChart(document.getElementById('tnh_module'));
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