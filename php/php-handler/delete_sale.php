<?php
    require_once '../php-connect/connect.php';

    $id_sale = $_GET['ID_Sale'];

    mysqli_query($connect, query:"DELETE FROM `sale` WHERE sale.ID_Sale = '$id_sale'");

    header("location: ../../admin.php");

?>