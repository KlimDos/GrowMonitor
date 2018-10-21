google.charts.load('current', {'packages':['gauge','annotationchart','line']});
google.charts.setOnLoadCallback(drawCharts);

function drawCharts() 
{
    //*******************/ tnh_graf /*************************

    //*******************/ tnh_graf /*************************    
    //*******************/ lux1_graf /*************************

    //*******************/ lux1_graf /*************************    
    //*******************/ lux2_graf /*************************

    //*******************/ lux2_graf /************************* 
	
	//*******************/ t_meter /*************************  
	var t_meter_json = $.ajax({
					url: '/main/php/t_meter_json.php',
					dataType: 'json',
					async: false
				}).responseText;  
        
		//console.log(JSON.stringify(json));
				
        var t_meter_data = new google.visualization.DataTable(t_meter_json);
        var t_meter_chart = new google.visualization.Gauge(document.getElementById('Tm_module'));
        var t_meter_options = {

			min:19, max:37,
			redFrom:25, redTo:31,
		    yellowFrom:22, yellowTo:34,
			greenFrom:19, greenTo:37,
			redColor: '#b9ff73',
			yellowColor: '#ffff73',
            greenColor: '#ff794c',
			minorTicks: 4,
							
        };
    
    t_meter_chart.draw(t_meter_data, t_meter_options);
	//*******************/ t_meter /************************* 

	
	//loop
    setInterval(function() 
		{
	
				//*******************/ t_meter /*************************
				var t_meter_json = $.ajax({
					url: '/main/php/t_meter_json.php',
					dataType: 'json',
					async: false
				}).responseText;  
        
				console.log(JSON.stringify(t_meter_json));
				
				var t_meter_data = new google.visualization.DataTable(t_meter_json);
		
				t_meter_chart.draw(t_meter_data, t_meter_options)  
				//*******************/ t_meter /*************************
				
			
	}, 10000);	
}				  