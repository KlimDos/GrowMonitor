<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/checkbox.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
  <script type="text/javascript" src="/main/js/get_jsons.js"></script>
  <script type="text/javascript" src="/main/js/btn.js"></script>


  
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">DashBoard</a>
					</div>
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="tnh.html">T and H</a></li>
						<li><a href="lux.html">Lux</a></li>
						<li><a href="#">Page 3</a></li>
					</ul>
				</nav>
			</div>	 
		</div>

    	<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-default"></nav>
			</div>	 
		</div>

    	<div class="row">
			<div class="col-md-12">
				 <div id="tnh_module"></div>			
			</div>	 
		</div>
		
		<div class="row">
			<div class="col-md-6">
				 <div id='lux1_module'></div>						
			</div>	
			<div class="col-md-6">
				 <div id ='lux2_module'></div>						
			</div>	 
		</div>
		<div class="row">
			<div class="col-md-6">
				 <div id ='w1_module'></div>						
			</div>	
			<div class="col-md-6">
				 <div id='w2_module'></div>						
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
					<fieldset class="switch">
						<label class="off">Off<input type="radio" class="on_off" name="on_off" value="off"/></label>
						<label class="on">On<input type="radio" class="on_off" name="on_off" value="on"/></label>
					</fieldset>
				</div>		
				<div class="col-md-6">
				<form action="" method="get">
					<fieldset class="switch">
						<label class="off">Off<input type="radio" class="on_off" name="on_off" value="off"/></label>
						<label class="on">On<input type="radio" class="on_off" name="on_off" value="on"/></label>
					</fieldset>
                </form>
				</div>	
			</div>							 
		</div>


			<div id="content">

				<form action="" method="get">

					<fieldset class="switch">
						<label class="off">Off<input type="radio" class="on_off" name="on_off" value="off"/></label>
						<label class="on">On<input type="radio" class="on_off" name="on_off" value="on"/></label>
					</fieldset>

					<input type="submit" value="refresh"/>

				</form>

				<div class="result">Переключатель установлен на значении:: <span>on</span></div>

			</div>
		</div>
	</div>

</body>
</html>