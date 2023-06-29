<?php
    require_once '../php-connect/connect.php';

    $id_authors = $_GET['ID_Authors'];

    mysqli_query($connect, query:"DELETE FROM `Authors` WHERE Authors.ID_Authors = '$id_authors'");

    header("location: ../../admin.php");

?>