<?php
session_start();
$connection = mysqli_connect("127.0.0.1:3307","root","","market");
if(mysqli_connect_error ()){
    echo 'Failed'.mysqli_connect_error();
}
$login=$pass="";
//registration
if($_POST['submit']){
    if (strlen($_POST['login'])>=6 && strlen($_POST['pass'])>=6){
        if($_POST['pass']==$_POST['checkPass']){
            $login=$_POST['login'];
            $pass=$_POST['pass'];
            $query="INSERT INTO logpass VALUES (NULL,'$login','$pass')";
            mysqli_query($connection,$query);
            header("location: ../View/sign.php");
        }else{
            $_SESSION['passCheck']='Пароли не совпадают';
            header("location: ../View/Register.php");
        }
    }
    else {
        $_SESSION['loginLen']='Логин и пароль должен состоять не менее из 6 символов.';
        header("location: ../View/Register.php");
    }
}

//SignIn
if($_POST['sign']){

    $login=$_POST['login'];
    $pass=$_POST['pass'];
    $query="SELECT registration_id FROM logpass WHERE login='$login' AND pass='$pass'";
    $res=mysqli_query($connection,$query);
    $row=mysqli_fetch_array($res);
    $count = mysqli_num_rows($res);
    if ($count ==1){
        header("location: ../View/index.php");
    }else{
        $_SESSION['logErr']='Неверный Логин или Пароль';
        header("location: ../View/sign.php");
    }
}