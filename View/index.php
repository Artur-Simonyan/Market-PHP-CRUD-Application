<?php
require '../Data/RegistrationData.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title> HOME </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Css/style_1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="JS/script.js"></script>
</head>
<body>
<div class="main">
    <div class="top_part">
        <div id="logo"></div>
        <ul id="social">
            <li><a href="http://www.facebook.com"  class="soc_1"></a></li>
            <li><a href="http://www.google.com" class="soc_2"></a></li>
            <li><a href="http://www.twitter.com" class="soc_3"></a></li>
        </ul>
    </div>

    <div class="phone_menu">
        <ul class="main_menu">
            <li> <a href="product.php" class="btn btn-link">PRODUCT</a>
                <ul class="sub_menu">
                    <li><a href="product.php">Product List</a> </li>
                    <li><a href="addProduct.php" class="btn btn-link">Add New Product</a></li>
                </ul>
            </li>
            <li> <a href="info.php">PRODUCT INFORMATION</a>
                <ul class="sub_menu">
                    <li><a href="info.php">Product Information List</a> </li>
                </ul>
            </li>
            <li> <a href="staff.php">STAFF</a>
                <ul class="sub_menu">
                    <li><a href="staff.php">Staff Positions</a></li>
                    <li><a href="staff.php">Staff Salary</a></li>
                </ul>
            </li>
            <li> <a href="https://github.com/Artur-Simonyan">CONTACTS</a>
                <ul class="sub_menu">
                    <li><a href="https://github.com/Artur-Simonyan">GitHub</a></li>
                </ul>
            </li>
            <li> <a href="sign.php">SIGN IN</a></li>
        </ul>
    </div>

    <div class="slider">
        <div class="join">
            <input type="button" onclick="window.location.href='Register.php'" value="JOIN US">
        </div>
    </div>

    <div class="news">
        <h2> FEATURED PRODUCTS </h2>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="popup">
            <div class="closeBtn">x</div>
        </div>
    </div>


    <ul class="content">
        <li>
            <h4>CREATE <br /> <span>PRODUCTS </span></h4>
            <div class="image"></div>
            <p><?php
                $text="CRUD is also relevant at the user interface level of most applications. For example, in address book software, the basic storage unit is an individual contact entry. As a bare minimum, the software must allow the user to
                Create or add new entries
                Read, retrieve, search, or view existing entries
                Update or edit existing entries
                Delete/deactivate/remove existing entries";
                echo substr("$text",0,150).'...'?></p></p>
            <a href="https://en.wikipedia.org/wiki/Create,_read,_update_and_delete" class="more"> ReadMore</a>
        </li>

        <li>
            <h4>READ <br /> <span>PRODUCTS </span></h4>
            <div class="image"></div>
            <p><?php
                $text="CRUD is also relevant at the user interface level of most applications. For example, in address book software, the basic storage unit is an individual contact entry. As a bare minimum, the software must allow the user to
                Create or add new entries
                Read, retrieve, search, or view existing entries
                Update or edit existing entries
                Delete/deactivate/remove existing entries";
                echo substr("$text",0,150).'...'?></p></p>
            <a href="https://en.wikipedia.org/wiki/Create,_read,_update_and_delete" class="more"> ReadMore</a>
        </li>

        <li>
            <h4>UPDATE <br /> <span>PRODUCTS </span></h4>
            <div class="image"></div>
            <p><?php
                $text="CRUD is also relevant at the user interface level of most applications. For example, in address book software, the basic storage unit is an individual contact entry. As a bare minimum, the software must allow the user to
                Create or add new entries
                Read, retrieve, search, or view existing entries
                Update or edit existing entries
                Delete/deactivate/remove existing entries";
                echo substr("$text",0,150).'...'?></p></p>
            <a href="https://en.wikipedia.org/wiki/Create,_read,_update_and_delete" class="more"> ReadMore</a>
        </li>

        <li>
            <h4>DELETE <br /> <span>PRODUCTS </span></h4>
            <div class="image"></div>
            <p><?php
                $text="CRUD is also relevant at the user interface level of most applications. For example, in address book software, the basic storage unit is an individual contact entry. As a bare minimum, the software must allow the user to
                Create or add new entries
                Read, retrieve, search, or view existing entries
                Update or edit existing entries
                Delete/deactivate/remove existing entries";
                echo substr("$text",0,150).'...'?></p>
            <a href="https://en.wikipedia.org/wiki/Create,_read,_update_and_delete" class="more"> ReadMore</a>
        </li>
    </ul>
</div>
<div class="copy"> Copyright & copy 2018</div>

</body>
</html>