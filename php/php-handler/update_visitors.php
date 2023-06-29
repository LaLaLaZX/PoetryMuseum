<?php
require_once '../php-connect/connect.php';

$visitors_id = $_GET['ID_Visitors'];
$visitor = mysqli_query($connect, query: "SELECT * FROM Visitors WHERE `ID_Visitors` = '$visitors_id'");
$visitor = mysqli_fetch_assoc($visitor);

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
    <form class="add_collections" action="uupdate_visitors.php" method="post">
        <input type="hidden" name="id_visitors" value="<?= $visitor['ID_Visitors'] ?>"> 
        <input type="text" name="visitor_surname" class="visitor_surname" placeholder="Фамилия" value="<?= $visitor['Surname'] ?>"> <br>
        <input type="text" name="visitor_name" class="visitor_name" placeholder="Имя" value="<?= $visitor['Name'] ?>"> <br>
        <input type="text" name="visitor_patronymic" class="visitor_patronymic" placeholder="Отчество" value="<?= $visitor['Patrinymic'] ?>"> <br>
        <input type="text" name="visitor_DOB" class="visitor_DOB" placeholder="Дата рождения" value="<?= $visitor['DOB'] ?>"> <br>
        <input type="text" name="visitor_email" class="visitor_email" placeholder="Почта" value="<?= $visitor['Email'] ?>"> <br>
        <input type="text" name="visitor_phone" class="visitor_phone" placeholder="Номер телефона" value="<?= $visitor['Phone_number'] ?>"> <br>
        <input type="text" name="visitor_password" class="visitor_password" placeholder="Пароль" value="<?= $visitor['Password'] ?>"> <br>
        <button class="add-but" type="submit">Изменить</button>
    </form>
</body>

</html>