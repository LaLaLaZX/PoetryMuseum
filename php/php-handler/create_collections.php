<?php
    require_once '../php-connect/connect.php';


$name = $_POST['collection_name'];

mysqli_query($connect, query:"INSERT INTO `Collections`(`ID_Collections`, `Name`) VALUES (NULL, '$name')");

header("location: ../../admin.php");
?>