<?php
$host     = 'localhost';
$username = 'root';
$password = '';
$dbname   ='aas';

$conn = new mysqli($host, $username, $password, $dbname);
if(!$conn){
    die("Cannot connect to the database.". $conn->error);
}