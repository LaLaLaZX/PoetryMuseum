<?php
    require_once '../php-connect/connect.php';

$id_authors = $_POST['id_authors'];
$surname = $_POST['authors_surname'];
$name = $_POST['authors_name'];
$patronymic = $_POST['authors_patronymic'];
$type_of_authors = $_POST['type_of_authors'];

mysqli_query($connect, query:"UPDATE `Authors` SET `Surname`='$surname',`Name`='$name',`Patronymic`='$patronymic',`ID_Type_of_authors`='$type_of_authors' WHERE Authors.ID_Authors = '$id_authors'");

header("location: ../../admin.php");
?>