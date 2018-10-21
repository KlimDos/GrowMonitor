<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/checkbox.css">
  <link rel="stylesheet" type="text/css" href="css/checkbox_ios8.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
  <script type="text/javascript" src="/main/js/get_jsons_meters.js"></script>
   <script type="text/javascript" src="/main/js/show_grafs.js"></script>
  <script type="text/javascript" src="/main/js/btn.js"></script>


  
</head>
<body>

	<div class="container-fluid">

		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">DashBoard</a>
					</div>
					<div class="collapse navbar-collapse" id="main-menu" >
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="tnh.html">T and H</a></li>
							<li><a href="lux.html">Lux</a></li>
							<li><a href="#">Page 3</a></li>
						</ul>
					</div>	
				</nav>
			</div>	 
		</div>

		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-default"></nav>
			</div>	 
		</div>

		<div class="row">
			<div class="col-md-3">
				<div class="col-md-6">
					<div id='Tm_module'></div>	
				</div>			
				<div class="col-md-6">
					<div id='Hm_module'></div>	
				</div>			
			</div>	 
			<div class="col-md-3">
				<div class="col-md-6">
					<div id='lux1m_module'></div>	
				</div>		
				<div class="col-md-6">
					<div id='lux2m_module'></div>	
				</div>	
			</div>		
			<div class="col-md-3">
				<div class="col-md-6">
					<div id='w1m_module'></div>	
				</div>			
				<div class="col-md-6">
					<div id='w2m_module'></div>	
				</div>			
			</div>	 
			<div class="col-md-3">
				<div class="col-md-6">
					<input type='checkbox' class='ios8-switch ios8-switch-lg' id='relay1'>
					<label for='relay1'>Relay #1</label>
					<br>
					<input type='checkbox' class='ios8-switch ios8-switch-lg' id='relay2'>
					<label for='relay2'>Relay #2</label>
					<br>

				</div>		
				<div class="col-md-6">
					<input type='checkbox' class='ios8-switch ios8-switch-lg' id='relay3'>
					<label for='relay3'>Relay #3</label>
					<br>
					<input type='checkbox' class='ios8-switch ios8-switch-lg' id='relay4'>
					<label for='relay4'>Relay #4</label>
					<br>
				</div>	
			</div>							 
		</div>



		<div class="row">
			<div class="col-md-12">
				<div class="container-fluid">
					<button type="button" class="btn btn-info center-block" onclick="show_tnh_module();">Темпиратура и влажность за сутки</button>	
					<div id="t_graf_main" style="display: none;"></div>	
					<div id="h_graf_main" style="display: none;"></div>	
				</div>	
			</div>	 
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="container-fluid">
					<button type="button" class="btn btn-info center-block" onclick="show_lux1_graf_main();">Освещенность датчик 1</button>
					<div id="lux1_graf_main" style="display: none;"></div>	
				</div>						
			</div>	
			<div class="col-md-6">
				<div class="container-fluid">
					<button type="button" class="btn btn-info center-block" onclick="show_lux2_graf_main();">Освещенность датчик 2</button>
					<div id ="lux2_graf_main" style="display: none;""></div>	
				</div>					
			</div>	 
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="container-fluid">
					<button type="button" class="btn btn-info center-block" onclick="show_w1_graf_main();">Увлажненность почвы датчик 1</button>
					<div id ="w1_graf_main" style="display: none;"></div>			
				</div>					
			</div>	
			<div class="col-md-6">
				<div class="container-fluid">
					<button type="button" class="btn btn-info center-block" onclick="show_w2_graf_main();">Увлажненность почвы датчик 2</button>
					<div id="w2_graf_main" style="display: none;"></div>		
				</div>					
			</div>	 
		</div>

	</div>


</body>
</html>