<?php
    require_once '../php-connect/connect.php';


$surname = $_POST['visitor_surname'];
$name = $_POST['visitor_name'];
$patronymic = $_POST['visitor_patronymic'];
$DOB = $_POST['visitor_DOB'];
$email = $_POST['visitor_email'];
$phone = $_POST['visitor_phone'];
$password = $_POST['visitor_password'];
var_dump($_POST);
mysqli_query($connect, query:"INSERT INTO `visitors`(`Surname`, `Name`, `Patrinymic`, `DOB`, `Email`, `Phone_number`, `Password`) VALUES ('$surname','$name','$patronymic','$DOB','$email','$phone','$password')");


header("location: ../../admin.php");
?>