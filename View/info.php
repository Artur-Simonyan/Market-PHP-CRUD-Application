<?php
require_once '../Model/InfoModel.php';
require_once '../Data/CRUDInfo.php'?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>info</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="Css/SessionStyle.css" rel="stylesheet">
    <style>body{background: url(images/background.jpg); color: white}</style>
</head>
<body>

<div>
    <a href="addProduct.php" class="btn btn-primary btn-info" >Add New Product</a>
    <a href="index.php" class="btn btn-primary btn-info">Home Page</a>
    <a href="product.php" class="btn btn-primary btn-info">Products Page</a>
</div>
<?php if(isset($_SESSION['saveInfo'])):?>
    <div class="msgSave">
        <?php
        echo $_SESSION['saveInfo'];
        unset($_SESSION['saveInfo']);
        ?>
    </div>
<?php endif;?>

<?php if(isset($_SESSION['deleteInfo'])):?>
    <div class="msgDelete">
        <?php
        echo $_SESSION['deleteInfo'];
        unset($_SESSION['deleteInfo']);
        ?>
    </div>

<?php endif;?>
<?php if(isset($_SESSION['editInfo'])):?>
    <div class="msgEdit">
        <?php echo $_SESSION['editInfo'];
        unset($_SESSION['editInfo'])?>
    </div>
<?php endif;?>

<div style="width: 40%">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Date</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <?php require_once '../Data/InfoData.php';
        foreach ($infoModel as $item): ?>
            <tbody>
            <tr>
                <td><?php $item->productList(); ?></td>
                <td><?php $item->priceList(); ?></td>
                <td><?php $item->quantityList(); ?></td>
                <td><?php $item->dateList(); ?></td>
                <td><a href="../View/editInfo.php?id=<?php $item->infoId();?>" class="btn btn-primary btn-success">Edit</a> </td>
                <td><a href="../View/addInfo.php?id=<?php $item->infoId();?>" class="btn btn-primary btn-danger">Delete</a> </td>
            </tr>
            </tbody>
        <?php endforeach;?>
    </table>
</div>

</body>
</html>