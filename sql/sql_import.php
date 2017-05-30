<?php 
//connection variables
$host = 'localhost';
$user = '';
$password = '';

//create mysql connection
$mysqli = new mysqli($host,$user,$password);
if ($mysqli->connect_errno) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    die();
}

//create the database
if ( !$mysqli->query('CREATE DATABASE churras') ) {
    printf("Errormessage: %s\n", $mysqli->error);
}

//create users table with all the fields
$mysqli->query('
CREATE TABLE `churras`.`users` 
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `churras`.`company` 
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `company` VARCHAR(100) NOT NULL,
    `cnpj` VARCHAR(100) NOT NULL,
PRIMARY KEY (`id`) 
); ') or die($mysqli->error);

?>