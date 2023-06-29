<?php
    require_once '../php-connect/connect.php';

    $exhibit_id = $_POST['id_exhibit'];
    $name = $_POST['exhibit_name'];
    $description = $_POST['description'];
    $author_surname = $_POST['author_surname'];
    $name_collection = $_POST['name_collection'];
    $expositions = $_POST['expositions'];

mysqli_query($connect, query:"UPDATE `exhibits` SET `Name`='$name',`Descriptions`='$description',`ID_Authors`='$author_surname',`ID_Collections`='$name_collection',`ID_Expositions`='$expositions' WHERE exhibits.ID_Exhibits = '$exhibit_id'");

header("location: ../../admin.php");
