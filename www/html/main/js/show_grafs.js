function show_tnh_module() {
	if (document.getElementById('t_graf_main').style.display == "block")
       {
       	document.getElementById('t_graf_main').style.display = "none";
        document.getElementById('h_graf_main').style.display = "none";
      }
	else
	{
	   document.getElementById('t_graf_main').style.display = "block";
	   document.getElementById('h_graf_main').style.display = "block";
	   google.charts.setOnLoadCallback(drawCharts);
	}
}

function show_lux1_graf_main() {
	if (document.getElementById('lux1_graf_main').style.display == "block")
       {
       	document.getElementById('lux1_graf_main').style.display = "none";       
      }
	else
	{
	   document.getElementById('lux1_graf_main').style.display = "block";	  
	   google.charts.setOnLoadCallback(draw_lux1_graf_main);
	}
}

function show_lux2_graf_main() {
	if (document.getElementById('lux2_graf_main').style.display == "block")
       {
       	document.getElementById('lux2_graf_main').style.display = "none";       
      }
	else
	{
	   document.getElementById('lux2_graf_main').style.display = "block";	  
	   google.charts.setOnLoadCallback(draw_lux2_graf_main);
	}
}

function show_w1_graf_main() {
	if (document.getElementById('w1_graf_main').style.display == "block")
       {
       	document.getElementById('w1_graf_main').style.display = "none";       
      }
	else
	{
	   document.getElementById('w1_graf_main').style.display = "block";	  
	   google.charts.setOnLoadCallback(draw_w1_graf_main);
	}
}

function show_w2_graf_main() {
	if (document.getElementById('w2_graf_main').style.display == "block")
       {
       	document.getElementById('w2_graf_main').style.display = "none";       
      }
	else
	{
	   document.getElementById('w2_graf_main').style.display = "block";	  
	   google.charts.setOnLoadCallback(draw_w2_graf_main);
	}
}

function drawCharts() 
{
    //*******************/ t_graf /*************************
	var t_graf_json = $.ajax({
					url: '/main/php/t_graf_json_main.php',
					dataType: 'json',
					async: false
				}).responseText;          
    var t_graf_data = new google.visualization.DataTable(t_graf_json);
    var t_graf_chart = new google.visualization.AreaChart(document.getElementById('t_graf_main'));
    var t_graf_options = 
		{

    series: {
    2: {
      targetAxisIndex:1
    }
  },
  vAxes: {
    1: {
      title:'Losses',
      textStyle: {color: 'red'}
    }
  }
             };
    t_graf_chart.draw(t_graf_data, t_graf_options);

//*******************/ t_graf /*************************
//*******************/ h_graf /*************************
	var h_graf_json = $.ajax({
					url: '/main/php/h_graf_json_main.php',
					dataType: 'json',
					async: false
				}).responseText;          
    var h_graf_data = new google.visualization.DataTable(h_graf_json);
    var h_graf_chart = new google.visualization.AreaChart(document.getElementById('h_graf_main'));
    var h_graf_options = 
		{
       hAxis: {
           textStyle: {
          //  color: '#black',
         //   fontSize: 20,
          //  fontName: 'Arial',
          //  bold: true,
           // italic: true
           baseline: 130,
         //  ticks: [5,10,15,20] ,
          },
        
        },
        vAxis: {
           textStyle: {
        //    color: '#1a237e',
         //   fontSize: 24,
         //   bold: true      
          },  
           //baseline: 130,
         //  ticks: [5,10,15,20,25,30,35,40,45,50,55,60,65,70,75,80],
           pointSize: 5,
           lineWidth: 5,
           dataOpacity: 1,
                
        },
        colors: ['red']
      };
    h_graf_chart.draw(h_graf_data, h_graf_options);
//*******************/ h_graf /*************************
}

function draw_lux1_graf_main() 
{
 //*******************/ lux1_graf /*************************
	var lux1_graf_json = $.ajax({
					url: '/main/php/lux1_graf_json_main.php',
					dataType: 'json',
					async: false
				}).responseText;          
    var lux1_graf_data = new google.visualization.DataTable(lux1_graf_json);
    var lux1_graf_chart = new google.visualization.AreaChart(document.getElementById('lux1_graf_main'));
    var lux1_graf_options = 
		{
          legend: {position: 'none'},
          hAxis:{textStyle: {fontSize: 8}},
          vAxis:{textStyle: {fontSize: 8}},
          title: 'Luminosity 1',
          max: 100,
          min: 0,
          colors: ['yellow'],
	      fill: 10,
	      thickness: 3,
        };
    lux1_graf_chart.draw(lux1_graf_data, lux1_graf_options);
    //*******************/ lux1_graf /************************* 
    } 

function draw_lux2_graf_main() 
{
 //*******************/ lux2_graf /*************************
	var lux2_graf_json = $.ajax({
					url: '/main/php/lux2_graf_json_main.php',
					dataType: 'json',
					async: false
				}).responseText;          
    var lux2_graf_data = new google.visualization.DataTable(lux2_graf_json);
    var lux2_graf_chart = new google.visualization.AreaChart(document.getElementById('lux2_graf_main'));
    var lux2_graf_options = 
		{
          legend: {position: 'none'},
          hAxis:{textStyle: {fontSize: 8}},
          vAxis:{textStyle: {fontSize: 8}},
          title: 'Luminosity 2',
          max: 100,
          min: 0,
          colors: ['yellow'],
	      fill: 10,
	      thickness: 3,
        };
    lux2_graf_chart.draw(lux2_graf_data, lux2_graf_options);
    //*******************/ lux2_graf /************************* 
    }     

function draw_w1_graf_main() 
{
 //*******************/ w1_graf /*************************
	var w1_graf_json = $.ajax({
					url: '/main/php/w1_graf_json_main.php',
					dataType: 'json',
					async: false
				}).responseText;          
    var w1_graf_data = new google.visualization.DataTable(w1_graf_json);
    var w1_graf_chart = new google.visualization.LineChart(document.getElementById('w1_graf_main'));
    var w1_graf_options = 
		{
          legend: {position: 'none'},
          hAxis:{textStyle: {fontSize: 8}},
          vAxis:{textStyle: {fontSize: 8}},
         
          max: 100,
          min: 0,
          colors: ['yellow'],
	      fill: 10,
	      thickness: 3,
        };
    w1_graf_chart.draw(w1_graf_data, w1_graf_options);
    //*******************/ w1_graf /************************* 
    } 

function draw_w2_graf_main() 
{
 //*******************/ w2_graf /*************************
	var w2_graf_json = $.ajax({
					url: '/main/php/w2_graf_json_main.php',
					dataType: 'json',
					async: false
				}).responseText;          
    var w2_graf_data = new google.visualization.DataTable(w2_graf_json);
    var w2_graf_chart = new google.visualization.LineChart(document.getElementById('w2_graf_main'));
    var w2_graf_options = 
		{
          legend: {position: 'none'},
          hAxis:{textStyle: {fontSize: 8}},
          vAxis:{textStyle: {fontSize: 8}},
     
          max: 100,
          min: 0,
          colors: ['yellow'],
	      fill: 10,
	      thickness: 3,
        };
    w2_graf_chart.draw(w2_graf_data, w2_graf_options);
    //*******************/ w2_graf /************************* 
    } 