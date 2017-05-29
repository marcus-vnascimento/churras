<?php

//connection variables
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'churras';

//create mysql connection
$mysqli = new mysqli($host,$user,$password,$db);
if ($mysqli->connect_errno) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    die();
}
?>