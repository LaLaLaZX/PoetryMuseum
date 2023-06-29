<?php
require_once '../php-connect/connect.php';

$exhibit_id = $_GET['ID_Exhibits'];
$exhibit = mysqli_query($connect, query: "SELECT * FROM exhibits WHERE `ID_Exhibits` = '$exhibit_id'");
$exhibit = mysqli_fetch_assoc($exhibit);

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
    <form class="add_authors" action="uupdate_exhibit.php" method="post">
        <input type="hidden" name="id_exhibit" value="<?= $exhibit['ID_Exhibits'] ?>">
        <input type="text" name="description" class="description" placeholder="Наименование" value="<?= $exhibit['Name'] ?>"> <br>
        <input type="text" name="sum" class="sum" placeholder="Описание" value="<?= $exhibit['Descriptions'] ?>"> <br>
        <select name="author_surname" class="type_of_authors">

            <?php $author_surnames = mysqli_query($connect, query: "SELECT authors.Surname FROM `authors`;");
            $author_surnames = mysqli_fetch_all($author_surnames);
            foreach ($author_surnames as $author_surname) {
            ?>
                <option value="1"><?= $author_surname[0] ?></option>
                <option value="2"><?= $author_surname[0] ?></option>
                <option value="3"><?= $author_surname[0] ?></option>
                <option value="4"><?= $author_surname[0] ?></option>
                <option value="5"><?= $author_surname[0] ?></option>
            <?php
            }
            ?>
        </select> <br>

        <select name="name_collection" class="type_of_authors">
            <?php $name_collections = mysqli_query($connect, query: "SELECT collections.Name FROM `collections`;");
            $name_collections = mysqli_fetch_all($name_collections);
            foreach ($name_collections as $name_collection) {
            ?>
                <option value="1"><?= $name_collection[0] ?></option>
                <option value="2"><?= $name_collection[0] ?></option>
                <option value="3"><?= $name_collection[0] ?></option>
                <option value="4"><?= $name_collection[0] ?></option>
                <option value="5"><?= $name_collection[0] ?></option>
            <?php
            }
            ?>
        </select> <br>
        <select name="expositions" class="type_of_authors">
            <?php $expositions = mysqli_query($connect, query: "SELECT expositions.Name FROM `expositions`;");
            $expositions = mysqli_fetch_all($expositions);
            foreach ($expositions as $exposition) {
            ?>
                <option value="1"><?= $exposition[0] ?></option>
                <option value="2"><?= $exposition[0] ?></option>
                <option value="3"><?= $exposition[0] ?></option>
                <option value="4"><?= $exposition[0] ?></option>
                <option value="5"><?= $exposition[0] ?></option>
            <?php
            }
            ?>
        </select> <br>

        <button class="add-but" type="submit">Изменить</button>
    </form>
</body>

</html>