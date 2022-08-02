<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body class="bg-transparent">
<a class="btn btn-outline-dark btn-block" href=register.php>Add Products</a>
<h1 class="text-info text-center">Shop Inventory</h1>
<table class="table table-secondary table-hover">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Discount</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    <?php
    //Connect to the database to fetch data
    require_once "db_connection.php";
    //Prepare a SELECT query
    $select_query="SELECT * FROM `inventory` WHERE 1";

    //Use the mysqli_query() to fetch the users
    $Products = mysqli_query($connection,$select_query);

    //Write a loop to display the respective users from the db
    while($row = mysqli_fetch_assoc($Products)){
        extract($row);
        echo "<tr>
                <td>$name</td>
                <td>$type</td>
                <td>$price</td>
                <td>$dquantity</td>
                <td><a class='btn btn-danger' href='delete.php?my_id=$id'>Delete</a></td>
                <td><a class='btn btn-dark' href='update.php?my_id=$id&my_name=$name&my_type=$type&my_price=$price&my_quantity=$quantity'>Update</a></td>
        </tr>";
    }
    ?>
</table>
</body>
</html>

