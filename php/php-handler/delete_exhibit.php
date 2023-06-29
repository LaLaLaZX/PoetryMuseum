<?php
    require_once '../php-connect/connect.php';

    $id_exhibit = $_GET['ID_Exhibits'];

    mysqli_query($connect, query:"DELETE FROM `exhibits` WHERE exhibits.ID_Exhibits = '$id_exhibit'");

    header("location: ../../admin.php");

?>