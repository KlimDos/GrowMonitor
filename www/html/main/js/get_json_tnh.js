google.charts.load('current', {'packages':['annotationchart']});
google.charts.setOnLoadCallback(drawCharts);

function drawCharts() 
{
    //*******************/ tnh_graf /*************************
	var tnh_graf_json = $.ajax({
					url: '/main/php/tnh_graf_json_new.php',
					dataType: 'json',
					async: false
				}).responseText;          
    var tnh_graf_data = new google.visualization.DataTable(tnh_graf_json);
    var tnh_graf_chart = new google.visualization.AnnotationChart(document.getElementById('tnh_module_slide1'));
    var tnh_graf_options = 
		{
          displayAnnotations: true,
          max: 100,
          min: 0,
          colors: ['red', 'blue'],
	      fill: 10,
	      thickness: 3,
        };
    tnh_graf_chart.draw(tnh_graf_data, tnh_graf_options);
    //*******************/ tnh_graf /*************************    
   
	
	//loop
    setInterval(function() 
		{
				//*******************/ tnh_graf /*************************
				var tnh_graf_json = $.ajax({
					url: '/main/php/tnh_graf_json_new.php',
					dataType: 'json',
					async: false
				}).responseText;          
				var tnh_graf_data = new google.visualization.DataTable(tnh_graf_json);
				
				tnh_graf_chart.draw(tnh_graf_data, tnh_graf_options);
				//*******************/ tnh_graf /*************************
				
	
	}, 10000);	
}				  