<?php require_once '../Model/ProductModel.php';
require_once '../Data/CRUDProduct.php'?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/SessionStyle.css">
    <style>body{background: url(images/background.jpg); color: white}</style>
</head>
<body>
<div>
    <a href="addProduct.php" class="btn btn-primary btn-info">Add New Product</a>
    <a href="index.php" class="btn btn-primary btn-info">Home Page</a>
</div>

<?php if(isset($_SESSION['deleteProduct'])):?>
    <div class="msgDelete">
        <?php
        echo $_SESSION['deleteProduct'];
        unset($_SESSION['deleteProduct']);
        ?>
    </div>
<?php endif;?>

<?php if(isset($_SESSION['editProduct'])):?>
    <div class="msgEdit">
        <?php echo $_SESSION['editProduct'];
        unset($_SESSION['editProduct'])?>
    </div>
<?php endif;?>

<div style="width: 40%;">
    <table class="table">
        <thead  class="thead-dark">
        <tr>
            <th>Product Name</th>
            <th>Department</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr></thead>
        <tbody>
        <?php require_once '../Data/ProductData.php';
        foreach ($productModel as $item):
        ?>
        <tbody>
        <tr>
            <td><?php $item->productsList();?></td>
            <td><?php $item->departmentList();?></td>
            <td><a href="../View/editProduct.php?id=<?php $item->productId();?>" class="btn btn-primary btn-success">Edit</a> </td>
            <td><a href="../Data/CRUDInfo.php?id=<?php $item->productId();?>" class="btn btn-primary btn-danger">Delete</a> </td>
        </tr>
        </tbody>
        <?php endforeach;?>
    </table>
</div>
</body>
</html>