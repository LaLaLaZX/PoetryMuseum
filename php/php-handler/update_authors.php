<?php
require_once '../php-connect/connect.php';

$authors_id = $_GET['ID_Authors'];
$author = mysqli_query($connect, query: "SELECT * FROM Authors WHERE `ID_Authors` = '$authors_id'");
$author = mysqli_fetch_assoc($author);

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
    <form class="add_authors" action="uupdate_authors.php" method="post">
        <input type="hidden" name="id_authors" value="<?= $author['ID_Authors'] ?>">
        <input type="text" name="authors_surname" class="authors_surname" placeholder="Фамилия" value="<?= $author['Surname'] ?>"> <br>
        <input type="text" name="authors_name" class="authors_name" placeholder="Имя" value="<?= $author['Name'] ?>"> <br>
        <input type="text" name="authors_patronymic" class="authors_patronymic" placeholder="Отчество" value="<?= $author['Patronymic'] ?>"> <br>
        <select name="type_of_authors" class="type_of_authors">
                        
                            <?php $type_of_authors = mysqli_query($connect, query: "SELECT type_of_authors.Name FROM `Type_of_authors`;");
                            $type_of_authors = mysqli_fetch_all($type_of_authors);
                            foreach ($type_of_authors as $type_of_author) {
                            ?>
                        <option value="1"><?=$type_of_author[0]?></option>
                        <option value="2"><?=$type_of_author[0]?></option>
                        <option value="3"><?=$type_of_author[0]?></option>
                        <option value="4"><?=$type_of_author[0]?></option>
                        <option value="5"><?=$type_of_author[0]?></option>
                        <?php
                            }
                            ?>
                        </select> <br>
        <button class="add-but" type="submit">Изменить</button>
    </form>
</body>

</html>