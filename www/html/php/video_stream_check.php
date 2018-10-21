<?php
//$output = exec("ps -aux |grep ffserver  | tr '\n' '^' ");
$output = exec("ps -aux | grep ffserver  | grep -v grep | wc -l");

if ($output == "0")
{
    $output2 = "unchecked";
}
else
{
	$output2 = "checked";
}
//print "<pre>$output2</pre>"; 
?>