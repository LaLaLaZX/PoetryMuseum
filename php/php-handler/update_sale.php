<?php
require_once '../php-connect/connect.php';

$sales_id = $_GET['ID_Sale'];
$sale = mysqli_query($connect, query: "SELECT * FROM sale WHERE `ID_Sale` = '$sales_id'");
$sale = mysqli_fetch_assoc($sale);

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
    <form class="add_authors" action="uupdate_sale.php" method="post">
        <input type="hidden" name="id_sales" value="<?= $sale['ID_Sale'] ?>">
        <select name="visitor_surname" class="type_of_authors">

            <?php $visitor_surnames = mysqli_query($connect, query: "SELECT visitors.Surname FROM `visitors`;");
            $visitor_surnames = mysqli_fetch_all($visitor_surnames);
            foreach ($visitor_surnames as $visitor_surname) {
            ?>
                <option value="49"><?= $visitor_surname[0] ?></option>
                <option value="50"><?= $visitor_surname[0] ?></option>
                <option value="51"><?= $visitor_surname[0] ?></option>
                <option value="52"><?= $visitor_surname[0] ?></option>
                <option value="53"><?= $visitor_surname[0] ?></option>
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
        <select name="type_of_tickets" class="type_of_authors">
            <?php $type_of_tickets = mysqli_query($connect, query: "SELECT type_of_tickets.Name FROM `type_of_tickets`;");
            $type_of_tickets = mysqli_fetch_all($type_of_tickets);
            foreach ($type_of_tickets as $type_of_ticket) {
            ?>
                <option value="1"><?= $type_of_ticket[0] ?></option>
                <option value="2"><?= $type_of_ticket[0] ?></option>
                <option value="3"><?= $type_of_ticket[0] ?></option>
                <option value="4"><?= $type_of_ticket[0] ?></option>
                <option value="5"><?= $type_of_ticket[0] ?></option>
            <?php
            }
            ?>
        </select> <br>
        <input type="text" name="date_of_sale" class="date_of_sale" placeholder="Дата продажи" value="<?= $sale['Date_of_sale'] ?>"> <br>
        <input type="text" name="sum" class="sum" placeholder="Сумма"  value="<?= $sale['Sum'] ?>"> <br>
        <input type="text" name="count" class="count" placeholder="Количество билетов" value="<?= $sale['Count'] ?>"> <br>
        <button class="add-but" type="submit">Изменить</button>
    </form>
</body>

</html>