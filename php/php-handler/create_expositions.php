<?php
    require_once '../php-connect/connect.php';


$name = $_POST['exposition_name'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

mysqli_query($connect, query:"INSERT INTO `expositions`(`Name`, `Start_date`, `End_date`) VALUES ('$name','$start_date','$end_date')");


header("location: ../../admin.php");
?>