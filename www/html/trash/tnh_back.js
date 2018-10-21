google.charts.load('current', {'packages':['annotationchart','gauge']});
google.charts.setOnLoadCallback(drawChart);
google.charts.setOnLoadCallback(drawChart_tnhm);
//google.charts.setOnLoadCallback(drawCharts);

function drawChart()  {
            var json = $.ajax({
					url: '/main/php/tnh_json.php',
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
        
        setInterval(function() {
               var json = $.ajax({
					url: '/main/php/tnh_json.php',
					dataType: 'json',
					async: false
				}).responseText;          
        var data = new google.visualization.DataTable(json);
        chart.draw(data, options);
            }, 30000);
        
      }
	  
function drawChart_tnhm() {
    var json = $.ajax({
					url: '/main/php/tnhm_json.php',
					dataType: 'json',
					async: false
				}).responseText;  
        
		//console.log(JSON.stringify(json));
				
        var data = new google.visualization.DataTable(json);
        var chart = new google.visualization.Gauge(document.getElementById('Tm_module'));
        var options = {

			min:19, max:37,
			redFrom:25, redTo:31,
		    yellowFrom:22, yellowTo:34,
			greenFrom:19, greenTo:37,
			redColor: '#b9ff73',
			yellowColor: '#ffff73',
            greenColor: '#ff794c',
			minorTicks: 4,
				

	
			
        };
    
    chart.draw(data, options);
        
    setInterval(function() {
        
               var json = $.ajax({
					url: '/main/php/tnhm_json.php',
					dataType: 'json',
					async: false
				}).responseText;  
        
		console.log(JSON.stringify(json));
				
        var data = new google.visualization.DataTable(json);
        chart.draw(data, options);    
        }, 3000);
      }
	  
function drawCharts() 
{
    //*******************/ tnh_graf /*************************
	var tnh_graf_json = $.ajax({
					url: '/main/php/tnh_json.php',
					dataType: 'json',
					async: false
				}).responseText;          
    var tnh_graf_data = new google.visualization.DataTable(tnh_graf_json);
    var tnh_graf_chart = new google.visualization.AnnotationChart(document.getElementById('tnh_module'));
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
	
	//*******************/ t_meter /*************************  
	var t_meter_json = $.ajax({
					url: '/main/php/tnhm_json.php',
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
	
	//loop
    setInterval(function() 
		{
	//*******************/ tnh_graf /*************************
				var tnh_graf_json = $.ajax({
					url: '/main/php/tnh_json.php',
					dataType: 'json',
					async: false
				}).responseText;          
    var tnh_graf_data = new google.visualization.DataTable(tnh_graf_json);
    tnh_graf_chart.draw(tnh_graf_data, tnh_graf_options)
	//*******************/ tnh_graf /*************************
	
	//*******************/ t_meter /*************************
	           var t_meter_json = $.ajax({
					url: '/main/php/tnhm_json.php',
					dataType: 'json',
					async: false
				}).responseText;  
        
		//console.log(JSON.stringify(t_meter_json));
				
        var data = new google.visualization.DataTable(t_meter_json);
        t_meter_chart.draw(t_meter_data, t_meter_options);   
    //*******************/ t_meter /*************************
	
	}, 30000);	
}				  