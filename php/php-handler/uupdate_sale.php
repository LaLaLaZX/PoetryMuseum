<?php
    require_once '../php-connect/connect.php';

    $sale_id = $_POST['id_sales'];
    $date = $_POST['date_of_sale'];
    $sum = $_POST['sum'];
    $count = $_POST['count'];
    $visitor_surname = $_POST['visitor_surname'];
    $expositions = $_POST['expositions'];
    $type_of_tickets = $_POST['type_of_tickets'];

mysqli_query($connect, query:"UPDATE `sale` SET `ID_Visitors`='$visitor_surname',`ID_Expositions`='$expositions',`ID_Type_of_ticket`='$type_of_tickets',`Date_of_sale`='$date',`Sum`='$sum',`Count`='$count'  WHERE sale.ID_Sale = '$sale_id'");

header("location: ../../admin.php");
?>