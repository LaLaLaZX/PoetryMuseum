<?php
    session_start();
    include "../php-connect/connect.php";

    if(isset($_POST['login'])) {
        $login = $_POST['login'];
        if($login === '') {
            unset($login);
        }
    }

    if(isset($_POST['password'])) {
        $password = $_POST['password'];
        if($password === '') {
            unset($password);
        }
    }

    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    $check_user = "SELECT * FROM `Visitors` WHERE `Email` ='$login'";
    $result = mysqli_query($connect, $check_user);
    $info_user = mysqli_fetch_array($result);

    if(empty($info_user['ID_Visitors'])) {
        $_SESSION['message'] = 'Неправильный логин или пароль!';
        header("location: ../../index.php");
    } 
    else {
        if(password_verify($password, $info_user['Password']))
        {
            $_SESSION['login'] = $info_user['Email'];
            $_SESSION['ID_Visitors'] = $info_user['ID_Visitors'];
            header("location: ../../profile.php");
            
        }
        else {
            $_SESSION['message'] = 'Неправильный пароль!';
            header("location: ../../index.php");
        }
    }
?>