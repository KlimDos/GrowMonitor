     google.charts.setOnLoadCallback(drawChart_tnhm);

      function drawChart_tnhm() {
     var json = $.ajax({
					url: '/main/php/tnhm_json.php',
					dataType: 'json',
					async: false
				}).responseText;  
        
		console.log(JSON.stringify(json));
				
        var data = new google.visualization.DataTable(json);
        var chart = new google.visualization.Gauge(document.getElementById('cam_module'));
        var options = {
			redFrom: 90, redTo: 100,
			yellowFrom:75, yellowTo: 90,
			minorTicks: 5
        };
        chart.draw(data, options);
      }