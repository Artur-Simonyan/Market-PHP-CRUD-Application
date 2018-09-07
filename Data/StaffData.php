<?php
$staffModel=array();
$salaryModel=array();

$connection=mysqli_connect ("127.0.0.1:3307","root","","market");
if(mysqli_connect_error ()){
    echo 'Failed'.mysqli_connect_error();
}

$query="SELECT staff_name,job,departmant_name FROM staff INNER JOIN position ON staff.position_id=position.position_id INNER JOIN department ON staff.department_id=department.department_id";
$result=mysqli_query ($connection,$query);
while($row=mysqli_fetch_array ($result)){
    $staffModel[]=new printStaff($row);
}

$query1="SELECT staff_name,staff_salary FROM staff LEFT JOIN salary_staff ON staff.staff_id=salary_staff.staff_id LEFT JOIN salary ON salary.salary_id=salary_staff.salary_id";
$result1=mysqli_query ($connection,$query1);
while($row=mysqli_fetch_array ($result1)){
    $salaryModel[]=new printStaff($row);
}