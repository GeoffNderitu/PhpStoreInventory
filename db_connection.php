<?php

$username = "root";
$host = "localhost";
$password = "";
$database = "store_inventory";
$connection = mysqli_connect($host,$username,$password,$database);

//Check if the connection to the DB was denied to stop the process
if (!isset($connection)){
    die("Connection  to the database failed");
}