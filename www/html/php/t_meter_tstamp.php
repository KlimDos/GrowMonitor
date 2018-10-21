<?php
require 'db_connect.php';

$query = $mysqli->query('select Date from Main ORDER BY Date DESC LIMIT 1');

// set up header; first two prevent IE from caching queries
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');


if ($query) {
    $row = $query->fetch_row();
    echo ($row[0]);
    $query->close();
}
?>
