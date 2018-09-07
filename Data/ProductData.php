<?php
$productModel=array();
$id=0;
$connection=mysqli_connect ("127.0.0.1:3307","root","","market");
if(mysqli_connect_error ()){
    echo 'Failed'.mysqli_connect_error();
}
$query="SELECT Product_id,Product_name,departmant_name FROM Products INNER JOIN department ON Products.department_id=department.department_id GROUP BY Product_id";
$result=mysqli_query ($connection,$query);
while($row=mysqli_fetch_array ($result)){
    $productModel[]=new printProduct($row);
}
