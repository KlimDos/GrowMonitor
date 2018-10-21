<?php
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

 ?> 
