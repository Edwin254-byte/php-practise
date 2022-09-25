<?php
//	Create a connection to the logindb database.
//	Set the encoding and the access details as constants:
Define ('DB_USER', 'william');
Define ('DB_PASSWORD', 'CatOnLap'); 
Define ( 'DB_HOST', 'localhost:3307' ); 
Define ( 'DB_NAME', 'logindb');
// Make the connection:
$dbcon = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 
mysqli_set_charset($dbcon, 'utf8');
?>
