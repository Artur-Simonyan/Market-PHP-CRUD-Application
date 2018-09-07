<?php
//...Edit
$connection=mysqli_connect ("127.0.0.1:3307","root","","market");
if(isset($_POST['update'])){
    $id=$_GET['id'];
    $productName=$_POST['productName'];
    $departmentName=$_POST['departmentName'];
    $_SESSION['editProduct']='Product was Edit';
    $query=mysqli_query ($connection,"UPDATE Products SET Product_name='$productName',department_id='$departmentName'  WHERE Product_id='$id'");
    header ('location: ../View/product.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Edit Product</title>
    <style>body{background: url(images/background.jpg); color: white}</style>
</head>
<body>
<h1>Edit Product</h1>
<form method="post">
    <input type="hidden" name="id" value=""/>
    <div class="form-group" style="width: 300px;">
        Product Name:<br>
        <input type="text" name="productName" value="" class="form-control"/>
    </div>
    <div class="form-group" style="width: 300px;">
        Choose Department:<br>
        <select name="departmentName" class="form-control">
            <optgroup label="Department">
                <option value="1">Sweet Department</option>
                <option value="2">Bread Department</option>
                <option value="3">Meat Department</option>
                <option value="4">Drinks Department</option>
                <option value="5">Fish Department</option>
            </optgroup>
        </select>
    </div>
    <input type="submit" value="Submit" name="update" class="btn btn-primary">
</form>

</body>
</html>