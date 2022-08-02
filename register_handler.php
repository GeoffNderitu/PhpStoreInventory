<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registered</title>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<a class="btn btn-outline-info btn-block" href=register.php>Add Products</a>
</body>
</html>

<?php

if (isset($_POST["btn_add"])){

$Name = $_POST["o"];
$Price = $_POST["p"];
$Quantity = $_POST["q"];
$Discount = $_POST["r"];

//Connection to database

require_once "db_connection.php";

//To save data using insert_query
$insert_query ="INSERT INTO `inventory`(`id`, `jina`, `bei`, `quantity`, `discount`) VALUES (null,'$Name','$Price','$Quantity','$Discount')";

//Save data using mysqli_query method
$Save = mysqli_query($connection,$insert_query);

if (isset($Save)){
    echo "Product Registered Successfully";
}else{
    echo "Product Registration Unsuccessfully";
    }
}
?>