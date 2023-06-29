<?php
    require_once '../php-connect/connect.php';

    $id_collections = $_GET['ID_Collections'];

    mysqli_query($connect, query:"DELETE FROM `Collections` WHERE Collections.ID_Collections = '$id_collections'");

    header("location: ../../admin.php");

?>