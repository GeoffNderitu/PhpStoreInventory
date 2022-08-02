<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body class="bg-transparent">
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <h1 class="text-info text-center">Add New Product</h1>
        <form action="register_handler.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Product Name" name="o">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Price(Ksh)" name="p">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Quantity" name="q">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Discount" name="r">
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Add" name="btn_add">
            <a href="inventory.php" class="btn btn-outline-info btn-block">View Inventory</a>
        </form>
    </div>
    <div class="col-3"></div>
</div>
</body>
</html>
