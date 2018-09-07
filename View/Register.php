<?php
require_once '../Data/RegistrationData.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Form </title>
    <link rel="stylesheet" type="text/css" href="../View/Css/style_1.css">
    <link rel="stylesheet" type="text/css" href="../View/Css/SessionStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../View/JS/script.js"></script>
</head>
<body>
<div id="main">
    <div class="form_div">
        <?php if(isset($_SESSION['loginLen'])): ?>
            <div id="logError">
                <?php
                echo $_SESSION['loginLen'];
                unset($_SESSION['loginLen']);
                ?>
            </div>
        <?php endif; ?>
        <?php if(isset($_SESSION['passCheck'])): ?>
            <div id="logError">
                <?php
                echo $_SESSION['passCheck'];
                unset($_SESSION['passCheck']);
                ?>
            </div>
        <?php endif; ?>
        <div id="form_head">
            <h4>REGISTRATION</h4>
        </div>
        <form action="../Data/RegistrationData.php" method="post">
        <ul>
            <li><input name="login" id="login" type="email" placeholder="Login" required/></li>
            <li><input name="pass" id="pass" type="password" placeholder="Password" required/></li>
            <li><input name="checkPass" id="checkPass" type="password" placeholder="Repeat Password" required/></li>
                <li> <input type="submit" value="JOIN" name="submit" id="submit"/></li>
        </ul>
        </form>
    </div>
</div>
</body>
</html>