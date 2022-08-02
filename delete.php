<?php
if (isset($_GET["my_id"])){
    $id = $_GET["my_id"];
}

require_once "db_connection.php";

$delete_query = "DELETE FROM inventory WHERE id='$id'";

$delete = mysqli_query($connection,$delete_query);

if (isset($delete)){
    header("location:inventory.php");
}else{
    echo "Delete Failed";
}