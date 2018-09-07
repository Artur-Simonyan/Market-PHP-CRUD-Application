<?php
require_once '../Data/RegistrationData.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title> Form </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../View/Css/style_1.css">
    <link rel="stylesheet" type="text/css" href="../View/Css/SessionStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../View/JS/script.js"></script>
</head>
<body>
<div id="main">
    <div class="form_div">
        <?php if(isset($_SESSION['logErr'])): ?>
            <div id="signErr">
                <?php
                echo $_SESSION['logErr'];
                unset($_SESSION['logErr']);
                ?>
            </div>
        <?php endif;?>
        <div id="form_head">
            <h4>SIGN IN</h4>
        </div>
        <form action="../Data/RegistrationData.php" method="post">
        <ul>
                <li><input name="login" id="login" type="email" placeholder="Login" required/></li>
                <li><input name="pass" id="pass" type="password" placeholder="Password" required/></li>
                <li> <input type="submit" value="SIGN IN" name="sign" id="sign"/></li>
                <li><a href="Register.php">Register</a></li>
        </ul>
        </form>
    </div>
</div>
</body>
</html>