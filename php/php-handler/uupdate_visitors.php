<?php
    require_once '../php-connect/connect.php';

    $visitors_id = $_POST['id_visitors'];
$surname = $_POST['visitor_surname'];
$name = $_POST['visitor_name'];
$patronymic = $_POST['visitor_patronymic'];
$DOB = $_POST['visitor_DOB'];
$email = $_POST['visitor_email'];
$phone = $_POST['visitor_phone'];
$password = $_POST['visitor_password'];

mysqli_query($connect, query:"UPDATE `visitors` SET `Surname`='$surname',`Name`='$name',`Patrinymic`='$patronymic',`DOB`='$DOB',`Email`='$email',`Phone_number`='$phone',`Password`='$password' WHERE visitors.ID_Visitors = '$visitors_id'");

header("location: ../../admin.php");
?>