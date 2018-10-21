<?php
/* $server = the IP address or network name of the server
 * $userName = the user to log into the database with
 * $password = the database account password
 * $databaseName = the name of the database to pull data from
 */
  ini_set('display_errors', 1);
$DB_NAME = 'TnH';
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '123456';
/* Establish the database connection */
  $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }

   /* select all the weekly tasks from the table googlechart */
  $query = $mysqli->query('select * from luminosity ORDER BY date');

$table = array();
$table['cols'] = array(
	/* define your DataTable columns here
	 * each column gets its own array
	 * syntax of the arrays is:
	 * label => column label
	 * type => data type of column (string, number, date, datetime, boolean)
	 */
	// I assumed your first column is a "string" type
	// and your second column is a "number" type
	// but you can change them if they are not
    array('label' => 'Date', 'type' => 'datetime'),
	array('label' => 'Lux1', 'type' => 'number'),
	array('label' => 'Lux2', 'type' => 'number')
);

$rows = array();
while($r = mysqli_fetch_assoc($query)) {
    $temp = array();
	// each column needs to have data inserted via the $temp array

	$temp[] = array('v' => 'Date('.date('Y',strtotime($r['date'])).',' . 
                                     (date('n',strtotime($r['date'])) - 1).','.
                                     date('d',strtotime($r['date'])).','.
                                     date('H',strtotime($r['date'])).','.
                                     date('i',strtotime($r['date'])).','.
                                     date('s',strtotime($r['date'])).')'); 
		
	$temp[] = array('v' => floatval($r['lux1'])); // typecast all numbers to the appropriate type (int or float) as needed - otherwise they are input as strings
	$temp[] = array('v' => floatval($r['lux2']));
	// insert the temp array into $rows
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
