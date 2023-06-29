<?php
require_once '../php-connect/connect.php';

$expositions_id = $_GET['ID_Expositions'];
$exposition = mysqli_query($connect, query: "SELECT * FROM Expositions WHERE `ID_Expositions` = '$expositions_id'");
$exposition = mysqli_fetch_assoc($exposition);

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
    <form class="add_collections" action="uupdate_expositions.php" method="post">
        <input type="hidden" name="id_expositions" value="<?= $exposition['ID_Expositions'] ?>"> 
        <input type="text" name="exposition_name" class="exposition_name" placeholder="Наименование" value="<?= $exposition['Name'] ?>"> <br>
        <input type="text" name="start_date" class="start_date" placeholder="Дата начала" value="<?= $exposition['Start_date'] ?>"> <br>
        <input type="text" name="end_date" class="end_date" placeholder="Дата окончания" value="<?= $exposition['End_date'] ?>"> <br>
        <button class="add-but" type="submit">Изменить</button>
    </form>
</body>

</html>