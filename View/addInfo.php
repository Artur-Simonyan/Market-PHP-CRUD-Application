<?php require_once '../Data/CRUDInfo.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Information</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>body{background: url(images/background.jpg); color: white}</style>
</head>
<body>
<h1>Add New Product Information</h1>
<form method="post" action="../Data/CRUDInfo.php">
    <div class="form-group" style="width: 300px;">
        Price:<br>
        <input type="text" name="price" value="" class="form-control" required/>
    </div>
    <div class="form-group" style="width: 300px;">
        Quantity:<br>
        <input type="text" name="quantity" value="" class="form-control" required/>
    </div>
    <div class="form-group" style="width: 300px;">
        Date:<br>
        <input type="text" name="date" value="" class="form-control" required/>
    </div>
    <input type="submit" value="Submit" name="save" class="btn btn-primary">
</form>
</body>
</html>