<?php
    require_once '../php-connect/connect.php';


$surname = $_POST['authors_surname'];
$name = $_POST['authors_name'];
$patronymic = $_POST['authors_patronymic'];
$type_of_authors = $_POST['type_of_authors'];

mysqli_query($connect, query:"INSERT INTO `Authors`(`Surname`, `Name`, `Patronymic`, `ID_Type_of_authors`) VALUES ('$surname', '$name', '$patronymic', '$type_of_authors')");


header("location: ../../admin.php");
?>