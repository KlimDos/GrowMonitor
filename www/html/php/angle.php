<?php

#$_GET[one];
#$output = exec("/var/www/html/relay1.py $_GET[angle]");
$output = exec("/var/www/html/relay1.py 50");
#echo "<pre>$output</pre>"; 
echo 'переменная: '.$_GET[angle];
?>