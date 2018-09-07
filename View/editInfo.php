<?php
session_start ();
$connection=mysqli_connect ("127.0.0.1:3307","root","","market");
if(isset($_POST['update'])){
    $id=$_GET['id'];
    $price=$_POST['price'];
    $quanity=$_POST['quanity'];
    $date=$_POST['date'];
    $_SESSION['editInfo']='Information was Edit';
    $query=mysqli_query ($connection,"UPDATE info SET price='$price',quanity='$quanity',date='$date'  WHERE info_id='$id'");
    header ('location: ../View/info.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Edit Info</title>
    <style>body{background: url(images/background.jpg); color: white}</style>
</head>
<body>
<h1>Edit Product Information</h1>
<form method="post">
    <input type="hidden" name="id" value=""/>
    <div class="form-group" style="width: 300px;">
        Product Price:<br>
        <input type="text" name="price" value="" class="form-control"/>
    </div>
    <div class="form-group" style="width: 300px;">
        Product Quantity:<br>
        <input type="text" name="quanity" value="" class="form-control"/>
    </div>
    <div class="form-group" style="width: 300px;">
        Date:<br>
        <input type="text" name="date" value="" class="form-control"/>
    </div>
    <input type="submit" value="Submit" name="update" class="btn btn-primary">
</form>

</body>
</html>