<?php
    require_once '../php-connect/connect.php';

    $collections_id = $_GET['ID_Collections'];
    $collection = mysqli_query($connect, query:"SELECT * FROM Collections WHERE `ID_Collections` = '$collections_id'");
    $collection = mysqli_fetch_assoc($collection);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменение</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <h1 class="table-name">Изменение</h1>
    <form class="add_collections" action="uupdate_collections.php" method="post">
        <input type="hidden" name="id_collections" value="<?= $collection['ID_Collections'] ?>"> 
        <input type="text" name="collection_name" class="collection_name" placeholder="Наименование" value="<?= $collection['Name'] ?>"><br>
        <button class="add-but" type="submit">Изменить</button>
    </form>
</body>
</html>

