<?php
    require_once '../php-connect/connect.php';

    $expositions_id = $_GET['ID_Expositions'];

    mysqli_query($connect, query:"DELETE FROM `expositions` WHERE expositions.ID_Expositions = '$expositions_id'");

    header("location: ../../admin.php");

?>