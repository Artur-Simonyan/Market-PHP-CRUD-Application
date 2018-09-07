<?php
session_start ();
$connection=mysqli_connect ("127.0.0.1:3307","root","","market");
$price="";
$quantity="";
$date="";
$id=0;
//...Add
if(isset($_POST['save'])){
    $price=$_POST['price'];
    $quantity=$_POST['quanity'];
    $date=$_POST['date'];
    $query="INSERT INTO info VALUES (NULL,'$price','$quantity','$date')";
    $_SESSION['saveInfo']='New Product Added';
    mysqli_query ($connection,$query);
    header ('location: ../View/info.php');
}
//...Delete
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query1="DELETE FROM info WHERE info_id=$id";
    $query2="DELETE FROM Products WHERE Product_id=$id";
    $_SESSION['deleteInfo']='Product was Deleted';
    mysqli_query ($connection,$query1);
    mysqli_query ($connection,$query2);
    header ("location: ../View/info.php");
}