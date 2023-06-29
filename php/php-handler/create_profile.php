<?php
    require_once '../php-connect/connect.php';


$name = $_POST['name'];
$surname = $_POST['surname'];
$patronymic = $_POST['patronymic'];
$DOB = $_POST['DOB'];
$phone = $_POST['phone'];
$email = $_POST['email'];

mysqli_query($connect, query:"UPDATE `Visitors` SET `Name`='$name',`Surname`='$surname',`Patrinymic`='$patronymic',`DOB`='$DOB',`Phone_number`='$phone' WHERE Visitors.Email = '$email'");

header("location: ../../profile.php");
?>