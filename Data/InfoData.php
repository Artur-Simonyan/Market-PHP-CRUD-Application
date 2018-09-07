<?php
$infoModel=array();
$productModel=array();

$connection=mysqli_connect ("127.0.0.1:3307","root","","market");
if(mysqli_connect_error ()){
    echo 'Failed'.mysqli_connect_error();
}

$query2="SELECT info_id,price,quanity,date,Product_name FROM info INNER JOIN Products ON info.info_id=Products.Product_id";
$result2=mysqli_query ($connection,$query2);
while($row=mysqli_fetch_array ($result2)){
    $infoModel[]=new InfoPrint($row);
}