<?php
    require_once '../php-connect/connect.php';


$name = $_POST['exhibit_name'];
$description = $_POST['description'];
$author_surname = $_POST['author_surname'];
$name_collection = $_POST['name_collection'];
$expositions = $_POST['expositions'];

mysqli_query($connect, query:"INSERT INTO `exhibits`(`Name`, `Descriptions`, `ID_Authors`, `ID_Collections`, `ID_Expositions`) VALUES ('$name','$description','$author_surname','$name_collection','$expositions')");


header("location: ../../admin.php");
?>