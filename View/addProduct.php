<?php require_once '../Data/CRUDProduct.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Add Product</title>
    <style>body{background: url(images/background.jpg); color: white}</style>
</head>
<body>
<h1>Add New Product</h1>
<form method="post" action="../Data/CRUDProduct.php">
    <div class="form-group" style="width: 300px;">
        Product Name:<br>
        <input type="text" name="productName" value="" class="form-control" required>
    </div>
    <div class="form-group" style="width: 300px;">
        Choose Department:<br>
        <select name="departmentName" class="form-control" required>
            <option value="1">Sweet Department</option>
            <option value="2">Bread Department</option>
            <option value="3">Meat Department</option>
            <option value="4">Drinks Department</option>
            <option value="5">Fish Department</option>
        </select>
    </div>
    <input type="submit" value="Submit" name="save" class="btn btn-primary">
</form>
</body>
</html>