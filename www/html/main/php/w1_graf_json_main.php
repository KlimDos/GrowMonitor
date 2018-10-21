<?php
require 'db_connect.php';
  $query = $mysqli->query('select * from moisture ORDER BY Date');

$table = array();
$table['cols'] = array(
    array('label' => 'Date', 'type' => 'datetime'),
	array('label' => 'w1', 'type' => 'number'),
);

$rows = array();
while($r = mysqli_fetch_assoc($query)) {
    $temp = array();
	// each column needs to have data inserted via the $temp array

	$temp[] = array('v' => 'Date('.date('Y',strtotime($r['Date'])).',' . 
                                     (date('n',strtotime($r['Date'])) - 1).','.
                                     date('d',strtotime($r['Date'])).','.
                                     date('H',strtotime($r['Date'])).','.
                                     date('i',strtotime($r['Date'])).','.
                                     date('s',strtotime($r['Date'])).')'); 
		
	$temp[] = array('v' => floatval($r['w1'])); 
    $rows[] = array('c' => $temp);
}

// populate the table with rows of data
$table['rows'] = $rows;

// encode the table as JSON
$jsonTable = json_encode($table);

// set up header; first two prevent IE from caching queries
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

// return the JSON data
echo $jsonTable;
?>
