
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Dashboard</title>
  <link rel="stylesheet" type="text/css" href="css/30.css">
  <link rel="stylesheet" type="text/css" href="css/navi.css">
    <link rel="stylesheet" type="text/css" href="css/checkbox.css">
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
   <script type="text/javascript" src="/main/js/get_jsons.js"></script>  
  <!--<script type="text/javascript" src="/main/js/tnh_back.js"></script>-->


		 
 </head>
 <body>
	<div id="menu">
	 <div id="container">
		 <a class="button27">Menu</a>
		 <a class="button27">Темпиратура и влажность воздуха</a>
		 <a class="button27">Влажность почвы 1</a>
		 <a class="button27">Влажность почвы 2</a>
		 <a class="button27">Освещенность 1</a>
		 <a class="button27">Освещенность 2</a>
	 </div>
	</div>
	<div id="calender">calender</div>
	<div id="layout">
		<div id="meters">
			<div id="Tm">
				<div id="Tm_module"></div>
			</div>
			<div id="Hm">
				<div id="Hm_module"></div>
			</div>
			<div id="w1m">w1m</div>
			<div id="w2m">w2m</div>
			<div id="l1m">
				<div id="lux1m_module"></div>
			</div>
			<div id="l2m">
				<div id="lux2m_module"></div>
			</div>
			<div id="relays">
				 <div id="relays1"><img class="relay" src="images/relay4.png" alt="some_text"></div>
				 <div id="relays2">
						<div id="relays3">

						</div>
				 </div>
			</div>
		</div>
	    <div id="cam_tnh">
		    <div id="cam">
				<div id="cam_module">
				 <img class="cam" src="images/cam.png" alt="some_text">
				</div>
			</div>
		    <div id="tnh">
				<div id="tnh_module"></div>
			</div>
		</div>
	   <div id="graf">
			<div id="w1">w1</div>
			<div id="w2">w2</div>
			<div id="l1">
				<div id="lux1_module"></div>
			</div>
			<div id="l2">
				<div id="lux2_module"></div>		
			</div>
	   </div>  
	</div>
	<div id="last">last</div>
 </body>
</html>