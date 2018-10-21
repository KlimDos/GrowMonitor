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

  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/jsapi"></script>
  <script type="text/javascript" src="js/loader.js"></script>
  
  <script type="text/javascript" src="js/get_jsons_meters.js"></script>
  <script type="text/javascript" src="js/show_grafs.js"></script>

  <link rel="stylesheet" href="css/switchery.css">
  <script src="js/switchery.js"></script>


<?php
require 'php/db_connect.php';

$query1 = $mysqli->query('select Date from Main ORDER BY Date DESC LIMIT 1');
$query2 = $mysqli->query('select date from luminosity ORDER BY Date DESC LIMIT 1');
$query3 = $mysqli->query('select Date from moisture ORDER BY Date DESC LIMIT 1');



if ($query1) {
    $row1 = $query1->fetch_row();
    //2017-05-26 00:51:03
    $row1[0] = substr($row1[0], 5, 11);
    $row1[0] = substr_replace($row1[0], '/', 2, 1);
    //05/26 00:51
    $row1[0] = $row1[0]{3}.$row1[0]{4}.$row1[0]{2}.$row1[0]{0}.$row1[0]{1}.$row1[0]{5}.$row1[0]{6}.$row1[0]{7}.$row1[0]{8}.$row1[0]{9}.$row1[0]{10};
    $query1->close();
}
if ($query2) {
    $row2 = $query2->fetch_row();
    //2017-05-26 00:51:03
    $row2[0] = substr($row2[0], 5, 11);
    $row2[0] = substr_replace($row2[0], '/', 2, 1);
    //05/26 00:51
    $row2[0] = $row2[0]{3}.$row2[0]{4}.$row2[0]{2}.$row2[0]{0}.$row2[0]{1}.$row2[0]{5}.$row2[0]{6}.$row2[0]{7}.$row2[0]{8}.$row2[0]{9}.$row2[0]{10};
    $query2->close();
}
if ($query3) {
    $row3 = $query3->fetch_row();
    //2017-05-26 00:51:03
    $row3[0] = substr($row3[0], 5, 11);
    $row3[0] = substr_replace($row3[0], '/', 2, 1);
    //05/26 00:51
    $row3[0] = $row3[0]{3}.$row3[0]{4}.$row3[0]{2}.$row3[0]{0}.$row3[0]{1}.$row3[0]{5}.$row3[0]{6}.$row3[0]{7}.$row3[0]{8}.$row3[0]{9}.$row3[0]{10};
    $query3->close();
}

?>


<?php
        $data = '01.05.2017';
        $time = strtotime($data);
        $today = time();
        $day = (($time - $today)/86400*-1)+1;
        $day = floor($day);
        //echo "До 1 января 2020 года осталось ".$day." дней.";
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
            <a class="navbar-brand" href="#">Гроу Монитор</a>
          </div>
          <div class="collapse navbar-collapse" id="main-menu" >
            <ul class="nav navbar-nav">
              <li><a href="index.php">Dashboard</a></li>
              <li class="active"><a href="tnh.php">Анализ температуры и влажности</a></li>
              <li><a href="lux.php">Анализ овсещенности</a></li>
              <li><a href="w.php">Анализ почвы</a></li>
            </ul>
          </div>  
        </nav>
      </div>   
    </div>

    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-default">
          
<h2 class="text-center">Сегодня <?php echo $day;?> день</h2>

        </nav>
      </div>   
    </div>


    <div class="row">
      <div class="col-md-2">
      </div>    
      <div class="col-md-8 col-xs-12">

       <div class="col-md-4 col-xs-12">
        <div class="col-md-6 col-xs-6">
          <div id='Tm_module'></div>
        </div>      
        <div class="col-md-6 col-xs-6">
          <div id='Hm_module'></div>  
        </div><p class="text-center">Updated:<?php echo $row1[0];?></p>
      </div> 

      <div class="col-md-4 col-xs-12">
        <div class="col-md-6 col-xs-6">
          <div id='lux1m_module'></div> 
        </div>    
        <div class="col-md-6 col-xs-6">
          <div id='lux2m_module'></div> 
        </div><p class="text-center">Updated:<?php echo $row2[0];?></p>
      </div>

      <div class="col-md-4 col-xs-12">
        <div class="col-md-6 col-xs-6">
          <div id='w1m_module'></div> 
        </div>      
        <div class="col-md-6 col-xs-6">
          <div id='w2m_module'></div>        
        </div><p class="text-center">Updated:<?php echo $row3[0];?></p> 
      </div> 
    </div>    
    <div class="col-md-2">
    </div>  
  </div>



  <div class="row">
    <div class="col-md-12">
      <nav class="navbar navbar-default">
        <div class="col-md-3 hidden-xs"><h3 class="text-center">Relays</h3>
        </div>
        <div class="col-md-6 col-xs-12">
          <div class="col-md-3 col-xs-6 relay">
            <input type="checkbox" class="js-switch" checked name="r1" /> <p> Реле 1</p>
          </div>
          <div class="col-md-3 col-xs-6 relay">
            <input type="checkbox" class="js-switch" checked name="r2" /> <p> Реле 2</p>
          </div>
          <div class="col-md-3 col-xs-6 relay">
          <input type="checkbox" class="js-switch" unchecked name="r3" /> <p> Реле 3</p>
          </div>
          <div class="col-md-3 col-xs-6 relay">
            <input type="checkbox" class="js-switch" unchecked name="r4" /> <p> Реле 4</p>
          </div>
        </div>
        <div class="col-md-3 hidden-xs"><h3 class="text-center">Relays</h3>
        </div>
      </nav>
    </div>   
  </div>
</div>

    <div class="row">
      <div class="col-md-12">
        <div class="container-fluid">
          <button type="button" class="btn btn-info center-block" onclick="show_tnh_module();">Темпeратура и влажность за сутки</button>  
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

  

<script type="text/javascript">

 var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(html) {
  var switchery = new Switchery(html);
});
</script>


<!-- ym -->
<script type="text/javascript" src="js/ym.js"></script>
<noscript><div><img src="https://mc.yandex.ru/watch/44780809" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- ym -->

</body>
</html>