<!DOCTYPE html>
<html lang="en">
<head>
  <title>Гроу Монитор</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/modules.css">
  <link rel="stylesheet" type="text/css" href="css/checkbox_ios8.css">
  <link rel="stylesheet" type="text/css" href="css/for_test.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
  <script type="text/javascript" src="js/bootstrap-slider.js"></script>
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/show-hide_button.js"></script>
  <link rel="stylesheet" href="css/switchery.css">
  <script src="js/switchery.js"></script>

<?php
        
include 'php/video_stream_check.php';

        //$data = '01.05.2017'; //my first cycle
        $data = '13.01.2018';
        $time = strtotime($data);
        $today = time();
        $day = (($time - $today)/86400*-1)+1;
        $day = floor($day);
        $stream1 = "http://".$_SERVER['HTTP_HOST'].":8090/live1.mjpg";
        $stream2 = "http://".$_SERVER['HTTP_HOST'].":8090/live.mjpg";
?>
    
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
            <a class="navbar-brand" href="/">Гроу Монитор</a>
          </div>
          <div class="collapse navbar-collapse" id="main-menu" >
            <ul class="nav navbar-nav">
              <li><a href="/">Dashboard</a></li>
              <li><a href="tnh">Анализ температуры и влажности</a></li>
              <li><a href="lux">Анализ овсещенности</a></li>
              <li><a href="w">Анализ почвы</a></li>
              <li class="active" ><a href="video">Video</a></li>
            </ul>
          </div>  
        </nav>
      </div>   
    </div>


    <div class="row">
      <div class="col-md-6">    
        <img id = "id_video1_vpn" data-src="<?php echo $stream1;?>" alt="" class="img-responsive center-block class1">
      </div>
      <div class="col-md-6">    
       <img id = "id_video0_vpn" data-src="<?php echo $stream2;?>" alt="" class="img-responsive center-block class1">
     </div>
     <div class="col-md-6">

       <img id = "id_video1_int" data-src="<?php echo $stream1;?>" alt="" class="img-responsive center-block class1 rotate180">
     </div>
     <div class="col-md-6">

       <img id = "id_video0_int" data-src="<?php echo $stream2;?>" alt="" class="img-responsive center-block class1">

     </div>
   </div>


   <div class="row"> 
    <nav class="navbar navbar-default">
      <div class="col-md-12 center-block text-center">

        <div class="btn-group btn-group-xs">
          <button id = "apply"type="button" class="btn btn-success" onclick="apply_angle()">Apply</button>
          <input id="usr" type="number" class="form-control smallbx" value="90" style="width: 60px; height: 22px;">
        </div>

        <input id="ex6" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="180" data-slider-step="1" data-slider-value="90" class="center-block text-center" />

        <div class="btn-group btn-group-xs">
          <button type="button" class="btn btn-success" onclick="show('id_video1_vpn')">Cam1</button>
          <button type="button" class="btn btn-success" onclick="show('id_video0_vpn')">Cam2</button>
        </div>
      </div>

      </span>

      <div class="col-md-3 hidden-xs"><h3 class="text-center">Relays</h3>
      </div>
      <div class="col-md-6 col-xs-12">
      <div class="col-md-3 col-xs-12 relay">

          <div class="col-md-6 col-xs-6 text-center">
          <input  type="checkbox" class="relay1" unchecked name="r1"/> <h6>Pump <input id="pump_timer" type="text" class="form-control smallbx" value="10" style="width: 40px; height: 22px;"></h6>
          </div>
          
          <div class="col-md-6 col-xs-6 text-left">
          <h6><kbd >10</kbd> - 200ml<br><kbd>50</kbd> - 1l</h6>
          </div>

        </div>
        <!-- <div class="col-md-3 col-xs-6 relay" style="border:1px solid #cecece;"> -->
        <div class="col-md-3 col-xs-4 relay">
          <input type="checkbox" class="relay2" <?php echo $output2;?> name="r2" /> <h6> Stream</h6>
        </div>
        <div class="col-md-3 col-xs-4 relay">
          <input type="checkbox" class="relay3" unchecked name="r3" /> <h6> Tourch</h6>
        </div>
        <div class="col-md-3 col-xs-4 relay">
          <input type="checkbox" class="relay4" unchecked name="r4" /> <h6> Lamp</h6>
        </div>

      </div>
      <div class="col-md-3 hidden-xs"><h3 class="text-center">Relays</h3>
      </div>
    </nav>  
  </div>


  <div class="row">
    <div class="col-md-6">
      <h5 class="text-center status"></h5>
    </div>
    <div class="col-md-6">
      <h5 class="timer"></h5>
    </div>

    <div class="col-md-12">
     <nav class="navbar navbar-default">  
       <h2 class="text-center">Сегодня <?php echo $day;?> день </h2> 
     </nav>
   </div>   
 </div>
</div>
</body>



<script type="text/javascript">

  var slider = new Slider("#ex6");
  slider.on("slide", function(sliderValue) {
 // document.getElementById("ex6SliderVal").textContent = sliderValue;
 document.getElementById("usr").value = sliderValue
});


//var sp = document.getElementById("ex6SliderVal").innerHTML
//document.getElementById("usr2").value = sp

function apply_angle() {       

 var value  = document.getElementById("usr")
 //$.get('/php/angle.php', { angle: value.value}, function (data) {alert(data);}); //to get results of php 
 $.get('/php/angle.php', { angle: value.value});
 jstatus.innerHTML = "угол передан"; 
       // init2.setPosition(0);
     }


function apply_pump_timer() {       

      var value  = document.getElementById("pump_timer")
      t_pump  = value.value
      var r = confirm("Запустить насос?");
       if (r) 
       {      
        $.get("/php/realy1on.php");
        jstatus.innerHTML = "Насос запущен";
        var timer = setInterval(function ()
        { 
         jtimer.innerHTML = t_pump; 
         t_pump=t_pump-1; 
         if(t_pump === 0)
         {
          clearInterval(timer);
          $.get("/php/realy1off.php");
          jstatus.innerHTML = "Насос остановленн"; 
          init1.setPosition(1);
          jtimer.innerHTML = '';
          //t_pump=10;
        }
      }, 1000);
      } 
      else { 
        jstatus.innerHTML = "отмена"; 
        init1.setPosition(1);
      }
    }

function show(id) {
  //document.getElementById(id).style.maxHeight = "640px";
  var images = document.getElementById(id);

  if (images.style.maxHeight == "640px")
  {
    images.style.maxHeight = "0px";
    images.src = images.getAttribute('data-src');
  }
  else
  {
    images.style.maxHeight = "640px";
    images.src = images.getAttribute('data-src');
  }  
}

//----------------------------------------------------------------------------------------

  var elem1 = document.querySelector('.relay1');
  var elem2 = document.querySelector('.relay2');
  var elem3 = document.querySelector('.relay3');
  var elem4 = document.querySelector('.relay4');

  var init1 = new Switchery(elem1);
  var init2 = new Switchery(elem2);
  var init3 = new Switchery(elem3);
  var init4 = new Switchery(elem4);


  var jstatus = document.querySelector('.status');
  var jtimer = document.querySelector('.timer');
  var t_pump = 50;
  //var t_stream = 10;


  elem1.onchange = function() {
    if (elem1.checked) 
    {
      apply_pump_timer()
    }
  }

//-----------------------------------------------------------------
/*elem2.onchange = function() {
  if (elem2.checked) 
  {
    //показать конфирм окно
    var r = confirm("Запустить стрим?");
    if (r) 
    {      
      $.get("/php/video_stream_on.php");
      jstatus.innerHTML = "Cтрим запущен"; 
      sleep(3000);
      show('id_video1_vpn'); 
    //  show('id_video0_vpn');

    } 
    else { 
      jstatus.innerHTML = "отмена"; 
      init2.setPosition(1);
    }
  }

  if (elem2.checked == false) 
  {
    $.get("/php/video_stream_off.php");
    jstatus.innerHTML = "стрим остановленн"; 
    init2.setPosition(0);
  }
}
*/
elem2.onchange = function() {
  if (elem2.checked) 
  {   
      $.get("/php/video_stream_on.php");
      jstatus.innerHTML = "Cтрим запущен"; 
      sleep(3000);
      show('id_video1_vpn'); 
    //  show('id_video0_vpn');  
  }

  if (elem2.checked == false) 
  {
    $.get("/php/video_stream_off.php");
    jstatus.innerHTML = "стрим остановленн"; 
    init2.setPosition(0);
  }
}


elem3.onchange = function() {
  if (elem3.checked) 
  {
    $.get("/php/realy2on.php");
    jstatus.innerHTML = "Фонарик запущен";     
  } 
  else {  
    $.get("/php/realy2off.php");
    jstatus.innerHTML = "Фонарик остановленн"; 
    init1.setPosition(0);
    }
}

elem4.onchange = function() {
  if (elem4.checked) 
  {
    $.get("/php/realy3on.php");
    jstatus.innerHTML = "Фонарик 2 запущен";     
  } 
  else {  
    $.get("/php/realy3off.php");
    jstatus.innerHTML = "Фонарик 2 остановленн"; 
    init1.setPosition(0);
    }
}

function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}

//-----------------------------------------------------------------
  var slider = new Slider('#ex1', {
    formatter: function(value) {
      return 'Current value: ' + value;
    }
  });

</script>

<!-- ym -->
<script type="text/javascript" src="js/ym.js"></script>
<noscript><div><img src="https://mc.yandex.ru/watch/44780809" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- ym -->

</html>
