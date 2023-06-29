<?php
    require_once '../php-connect/connect.php';

    $id_visitors = $_GET['ID_Visitors'];

    mysqli_query($connect, query:"DELETE FROM `visitors` WHERE visitors.ID_Visitors = '$id_visitors'");

    header("location: ../../admin.php");

?>