<?php require_once '../Model/StaffModel.php'?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>staff</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>body{background: url(images/background.jpg); color: white}</style>
</head>
<body>
<div>
    <a href="index.php" class="btn btn-primary btn-info">Home Page</a>
</div>
<div style="width: 40%;">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>Staff</th>
            <th>Position</th>
            <th>Department</th>
        </tr></thead>
        <?php require_once '../Data/StaffData.php';
        foreach ($staffModel as $item):?>
            <tbody>
            <tr>
                <td><?php $item->printStaffName(); ?></td>
                <td><?php $item->printStaffJob(); ?></td>
                <td><?php $item->printDepartmant(); ?></td>
            </tr>
            </tbody>
        <?php endforeach;?>
    </table>
</div>
</body>
</html>