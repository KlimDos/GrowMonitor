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
	//*******************/ h_meter /*************************  
		var h_meter_json = $.ajax({
					url: '/main/php/h_meter_json.php',
					dataType: 'json',
					async: false
				}).responseText;  
        
		//console.log(JSON.stringify(json));
				
        var h_meter_data = new google.visualization.DataTable(h_meter_json);
        var h_meter_chart = new google.visualization.Gauge(document.getElementById('Hm_module'));
        var h_meter_options = {

			min:0, max:100,
			redFrom:20, redTo:50,
		    yellowFrom:10, yellowTo:80,
			greenFrom:0, greenTo:100,
			redColor: '#b9ff73',
			yellowColor: '#ffff73',
            greenColor: '#ff794c',
			minorTicks: 10,
							
        };
    
    h_meter_chart.draw(h_meter_data, h_meter_options);
	//*******************/ h_meter /************************* 
	//*******************/ lux1_meter /*************************  
		var lux1_meter_json = $.ajax({
					url: '/main/php/lux1_meter_json.php',
					dataType: 'json',
					async: false
				}).responseText;  
        
		//console.log(JSON.stringify(json));
				
        var lux1_meter_data = new google.visualization.DataTable(lux1_meter_json);
        var lux1_meter_chart = new google.visualization.Gauge(document.getElementById('lux1m_module'));
        var lux1_meter_options = {

			min:0, max:9000,
			redFrom:5000, redTo:9000,
		    yellowFrom:1000, yellowTo:5000,
			greenFrom:0, greenTo:5000,
			redColor: '#b9ff73',
			yellowColor: '#ffff73',
            greenColor: '#ff794c',
			minorTicks: 5,
							
        };
    
    lux1_meter_chart.draw(lux1_meter_data, lux1_meter_options);
	//*******************/ lux1_meter /*************************
	//*******************/ lux2_meter /*************************  
		var lux2_meter_json = $.ajax({
					url: '/main/php/lux2_meter_json.php',
					dataType: 'json',
					async: false
				}).responseText;  
        
		//console.log(JSON.stringify(json));
				
        var lux2_meter_data = new google.visualization.DataTable(lux2_meter_json);
        var lux2_meter_chart = new google.visualization.Gauge(document.getElementById('lux2m_module'));
        var lux2_meter_options = {

			min:0, max:9000,
			redFrom:5000, redTo:9000,
		    yellowFrom:1000, yellowTo:5000,
			greenFrom:0, greenTo:5000,
			redColor: '#b9ff73',
			yellowColor: '#ffff73',
            greenColor: '#ff794c',
			minorTicks: 5,
							
        };
    
    lux2_meter_chart.draw(lux2_meter_data, lux2_meter_options);
	//*******************/ lux1_meter /*************************
		//*******************/ lux1_meter /*************************  
		var lux1_meter_json = $.ajax({
					url: '/main/php/lux1_meter_json.php',
					dataType: 'json',
					async: false
				}).responseText;  
        
		//console.log(JSON.stringify(json));
				
        var lux1_meter_data = new google.visualization.DataTable(lux1_meter_json);
        var lux1_meter_chart = new google.visualization.Gauge(document.getElementById('lux1m_module'));
        var lux1_meter_options = {

			min:0, max:9000,
			redFrom:5000, redTo:9000,
		    yellowFrom:1000, yellowTo:5000,
			greenFrom:0, greenTo:5000,
			redColor: '#b9ff73',
			yellowColor: '#ffff73',
            greenColor: '#ff794c',
			minorTicks: 5,
							
        };
    
    lux1_meter_chart.draw(lux1_meter_data, lux1_meter_options);
	//*******************/ lux1_meter /*************************
	//*******************/ lux2_meter /*************************  
		var lux2_meter_json = $.ajax({
					url: '/main/php/lux2_meter_json.php',
					dataType: 'json',
					async: false
				}).responseText;  
        
		//console.log(JSON.stringify(json));
				
        var lux2_meter_data = new google.visualization.DataTable(lux2_meter_json);
        var lux2_meter_chart = new google.visualization.Gauge(document.getElementById('lux2m_module'));
        var lux2_meter_options = {

			min:0, max:9000,
			redFrom:5000, redTo:9000,
		    yellowFrom:1000, yellowTo:5000,
			greenFrom:0, greenTo:5000,
			redColor: '#b9ff73',
			yellowColor: '#ffff73',
            greenColor: '#ff794c',
			minorTicks: 5,
							
        };
    
    lux2_meter_chart.draw(lux2_meter_data, lux2_meter_options);
	//*******************/ lux1_meter /*************************
		//*******************/ w1_meter /*************************  
		var w1_meter_json = $.ajax({
					url: '/main/php/w1_meter_json.php',
					dataType: 'json',
					async: false
				}).responseText;  
        
		//console.log(JSON.stringify(json));
				
        var w1_meter_data = new google.visualization.DataTable(w1_meter_json);
        var w1_meter_chart = new google.visualization.Gauge(document.getElementById('w1m_module'));
        var w1_meter_options = {

			min:0, max:100,
			redFrom:40, redTo:70,
		    yellowFrom:20, yellowTo:80,
			greenFrom:0, greenTo:100,
			redColor: '#b9ff73',
			yellowColor: '#ffff73',
            greenColor: '#ff794c',
			minorTicks: 5,
							
        };
    
    w1_meter_chart.draw(w1_meter_data, w1_meter_options);
	//*******************/ w1_meter /*************************
	//*******************/ w2_meter /*************************  
		var w2_meter_json = $.ajax({
					url: '/main/php/w2_meter_json.php',
					dataType: 'json',
					async: false
				}).responseText;  
        
		//console.log(JSON.stringify(json));
				
        var w2_meter_data = new google.visualization.DataTable(w2_meter_json);
        var w2_meter_chart = new google.visualization.Gauge(document.getElementById('w2m_module'));
        var w2_meter_options = {

			min:0, max:100,
			redFrom:40, redTo:70,
		    yellowFrom:20, yellowTo:80,
			greenFrom:0, greenTo:100,
			redColor: '#b9ff73',
			yellowColor: '#ffff73',
            greenColor: '#ff794c',
			minorTicks: 5,
							
							
        };
    
    w2_meter_chart.draw(w2_meter_data, w2_meter_options);
	//*******************/ w2_meter /*************************
	
	//loop
    setInterval(function() 
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
        
				//console.log(JSON.stringify(t_meter_json));
				
				var t_meter_data = new google.visualization.DataTable(t_meter_json);
		
				t_meter_chart.draw(t_meter_data, t_meter_options)  
				//*******************/ t_meter /*************************
				
				//*******************/ h_meter /*************************
				var h_meter_json = $.ajax({
					url: '/main/php/h_meter_json.php',
					dataType: 'json',
					async: false
				}).responseText;  
        
				//console.log(JSON.stringify(h_meter_json));
				
				var h_meter_data = new google.visualization.DataTable(h_meter_json);
		
				h_meter_chart.draw(h_meter_data, h_meter_options)  
				//*******************/ h_meter /*************************

				//*******************/ lux1_meter /*************************
				var lux1_meter_json = $.ajax({
					url: '/main/php/lux1_meter_json.php',
					dataType: 'json',
					async: false
				}).responseText;  
        
				//console.log(JSON.stringify(lux1_meter_json));
				
				var lux1_meter_data = new google.visualization.DataTable(lux1_meter_json);
		
				lux1_meter_chart.draw(lux1_meter_data, lux1_meter_options)  
				//*******************/ lux1_meter /*************************
				//*******************/ lux2_meter /*************************
				var lux2_meter_json = $.ajax({
					url: '/main/php/lux2_meter_json.php',
					dataType: 'json',
					async: false
				}).responseText;  
        
				//console.log(JSON.stringify(lux2_meter_json));
				
				var lux2_meter_data = new google.visualization.DataTable(lux2_meter_json);
		
				lux2_meter_chart.draw(lux2_meter_data, lux2_meter_options)  
				//*******************/ lux2_meter /*************************
				//*******************/w1_meter /*************************
				var w1_meter_json = $.ajax({
					url: '/main/php/w1_meter_json.php',
					dataType: 'json',
					async: false
				}).responseText;  
        
				//console.log(JSON.stringify(lux1_meter_json));
				
				var w1_meter_data = new google.visualization.DataTable(w1_meter_json);
		
				w1_meter_chart.draw(w1_meter_data, w1_meter_options)  
				//*******************/ w1_meter /*************************
				//*******************/ w2_meter /*************************
				var w2_meter_json = $.ajax({
					url: '/main/php/w2_meter_json.php',
					dataType: 'json',
					async: false
				}).responseText;  
        
				//console.log(JSON.stringify(lux2_meter_json));
				
				var w2_meter_data = new google.visualization.DataTable(w2_meter_json);
		
				w2_meter_chart.draw(w2_meter_data, w2_meter_options)  
				//*******************/ w2_meter /*************************
	
	}, 10000);	
}				  