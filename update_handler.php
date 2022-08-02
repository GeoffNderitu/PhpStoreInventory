<?php
//Check if update button has been clicked
if (isset($_POST["btn_update"])){
    $id = $_POST["t"];
    $updated_name = $_POST["o"];
    $updated_price = $_POST["p"];
    $updated_quantity = $_POST["q"];
    $updated_discount= $_POST["r"];

require_once "db_connection.php";

$update_query = "UPDATE `inventory` SET `jina`='$updated_name',`bei`='$updated_price',`quantity`='$updated_quantity',`discount`='$updated_discount' WHERE id='$id'";

$update= mysqli_query($connection,$update_query);

if (isset($update)){
    header("location:inventory.php");
}else{
    echo "Updating Failed!";
   }
}