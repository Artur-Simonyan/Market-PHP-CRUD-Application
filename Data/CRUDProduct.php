<?php
session_start ();
$connection=mysqli_connect ("127.0.0.1:3307","root","","market");
$productName="";
$departmentName="";
$id=0;
//...Add
if(isset($_POST['save'])){
    $productName=$_POST['productName'];
    $departmentName=$_POST['departmentName'];
    $query="INSERT INTO Products VALUES (NULL,'$productName','$departmentName')";
    mysqli_query($connection,$query);
    header ('location: ../View/addInfo.php');
}
//...Delete
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query1="DELETE FROM Products WHERE Product_id=$id";
    $_SESSION['deleteProduct']='Product was Deleted';
    mysqli_query ($connection,$query1);
    header ('location: ../View/product.php');
}
