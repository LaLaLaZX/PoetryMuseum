<?php
    require_once '../php-connect/connect.php';


$date = $_POST['date_of_sale'];
$sum = $_POST['sum'];
$count = $_POST['count'];
$visitor_surname = $_POST['visitor_surname'];
$expositions = $_POST['expositions'];
$type_of_tickets = $_POST['type_of_tickets'];

mysqli_query($connect, query:"INSERT INTO `sale`(`ID_Visitors`, `ID_Expositions`, `ID_Type_of_ticket`, `Date_of_sale`, `Sum`, `Count`) VALUES ('$visitor_surname','$expositions','$type_of_tickets','$date','$sum','$count')");


header("location: ../../admin.php");
?>