<?php
session_start();
include "../php-connect/connect.php";

if (isset($_POST['login'])) {
    $login = $_POST['login'];
    if ($login === '') {
        unset($login);
    }
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if ($password === '') {
        unset($password);
    }
}

if (isset($_POST['confirmpassword'])) {
    $confirmpassword = $_POST['confirmpassword'];
    if ($confirmpassword === '') {
        unset($confirmpassword);
    }
}


$login = trim($_POST['login']);
$password = trim($_POST['password']);
$confirmpassword = trim($_POST['confirmpassword']);

$hash = password_hash($password, PASSWORD_DEFAULT);

$check_login_user = "SELECT * FROM Visitors WHERE Email = '$login'";
$result_check = mysqli_query($connect, $check_login_user);
$check_login = mysqli_fetch_array($result_check);

if (!empty($check_login['ID_Visitors'])) {
    header("location: ../../index.php?errorlogin-existinglogin");
} else {
    $reg_user = "INSERT INTO Visitors (Email, Password) VALUES ('$login', '$hash')";
    if ($password === $confirmpassword) {
        $result = mysqli_query($connect, $reg_user);
        header("location: ../../index.php");
    } else {
        $_SESSION['message'] = 'Пароли не совпадают!';
        header("location: ../index.php");
    }
}