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
					url: '/php/t_graf_json_main.php',
					dataType: 'json',
					async: false
				}).responseText;          
    var t_graf_data = new google.visualization.DataTable(t_graf_json);
    var t_graf_chart = new google.visualization.AreaChart(document.getElementById('t_graf_main'));
    var t_graf_options = 
    {
     
      legend: {position: 'none'},

      hAxis:{showTextEvery:1,},

      series: {
        0: {targetAxisIndex: 1},
        1: {targetAxisIndex: 1},
        2: {targetAxisIndex: 1}, 
      },
      vAxes: {
       0: {},
       1: {},
       //1: {ticks:[20, {v:28, f:'Идеал'}, {v:32, f:'жакро'}, 40], showTextEvery:1},


      },
      colors: ['#9932CC'],
      //chartArea:{left:20,top:10,height:'200%'},
      focusTarget :"category",
      baseline: 2,

    ticks: [5,10,15,20],


   };
    t_graf_chart.draw(t_graf_data, t_graf_options);

//*******************/ t_graf /*************************
//*******************/ h_graf /*************************
	var h_graf_json = $.ajax({
					url: '/php/h_graf_json_main.php',
					dataType: 'json',
					async: false
				}).responseText;          
    var h_graf_data = new google.visualization.DataTable(h_graf_json);
    var h_graf_chart = new google.visualization.AreaChart(document.getElementById('h_graf_main'));
    var h_graf_options = 
		{
        legend: {position: 'none'},

        series: {
        0: {targetAxisIndex: 1},
        1: {targetAxisIndex: 1},
        2: {targetAxisIndex: 1}, 
      },
      vAxes: {
       0: {},
       1: {},
      },
        colors: ['#00FF7F']
      };
    h_graf_chart.draw(h_graf_data, h_graf_options);
//*******************/ h_graf /*************************
}

function draw_lux1_graf_main() 
{
 //*******************/ lux1_graf /*************************
	var lux1_graf_json = $.ajax({
					url: '/php/lux1_graf_json_main.php',
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
					url: '/php/lux2_graf_json_main.php',
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
          //title: 'Luminosity 2',
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
					url: '/php/w1_graf_json_main.php',
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
         
          max: 1000,
          min: 0,
          colors: ['#f0b3ff'],
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
					url: '/php/w2_graf_json_main.php',
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
          max: 1000,
          min: 0,
          colors: ['#f0b3ff'],
	      fill: 10,
	      thickness: 3,
        };
    w2_graf_chart.draw(w2_graf_data, w2_graf_options);
    //*******************/ w2_graf /************************* 
    } 