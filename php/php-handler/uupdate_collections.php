<?php
    require_once '../php-connect/connect.php';

$id_collections = $_POST['id_collections'];
$name = $_POST['collection_name'];

mysqli_query($connect, query:"UPDATE `Collections` SET `Name`='$name' WHERE Collections.ID_Collections = '$id_collections'");

header("location: ../../admin.php");
?>