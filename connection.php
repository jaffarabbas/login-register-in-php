<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "db_auth";

$connection = mysqli_connect($server, $username, $password, $database);

if(!$connection){
    die("Connection failed: " . mysqli_connect_error());
}

?>