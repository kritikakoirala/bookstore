<?php

$server = "localhost";
$username = "root";
$password = "";
$database_name = "bookstore";

$connection = mysqli_connect($server, $username, $password, $database_name);
if(!$connection){
    die("Error!".mysqli_connect_error());
}
