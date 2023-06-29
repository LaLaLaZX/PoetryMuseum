<?php
    require_once '../php-connect/connect.php';

    $expositions_id = $_POST['id_expositions'];
    $name = $_POST['exposition_name'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

mysqli_query($connect, query:"UPDATE `expositions` SET `Name`='$name',`Start_date`='$start_date',`End_date`='$end_date' WHERE expositions.ID_Expositions = '$expositions_id'");

header("location: ../../admin.php");
?>