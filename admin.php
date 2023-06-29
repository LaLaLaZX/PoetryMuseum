<?php
session_start();

require_once 'php/php-connect/connect.php'

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель администратора</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="navigation-one">
                <a href="index.php" class="nav"><img src="images/PoetryMuseum.png" alt="Логотип" class="logo"></a>
                <a href="#" class="nav-text">История музея</a>
                <a href="collections.php" class="nav-text">Коллекции</a>
                <a href="expositions.php" class="nav-text">Выставки</a>
                <a href="#" class="nav-text">Контакты</a>
                <a class="nav"><img src="images/user.svg" alt="Профиль" class="user"></a>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <h1 class="pay-title">Панель администратора</h1>
            <h2 class="table-name">Коллекции</h2>
            <div class="table-box">
                <div class="table-one">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
                        <?php
                        $collections = mysqli_query($connect, query: "SELECT * FROM Collections");
                        $collections = mysqli_fetch_all($collections);
                        foreach ($collections as $collection) {
                        ?>
                            <tr>
                                <td><?= $collection[0] ?></td>
                                <td><?= $collection[1] ?></td>
                                <td><a href="php/php-handler/update_collections.php?ID_Collections=<?= $collection[0] ?>">Изменить</a></td>
                                <td><a href="php/php-handler/delete_collections.php?ID_Collections=<?= $collection[0] ?>">Удалить</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
                <div class="add-one">
                    <form class="add_collections" action="php/php-handler/create_collections.php" method="post">
                        <input type="text" name="collection_name" class="collection_name" placeholder="Наименование"> <br>
                        <button class="add-but" type="submit">Добавить</button>
                    </form>
                </div>
            </div>
            <h2 class="table-name">Авторы</h2>

            <div class="table-one">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Surname</th>
                        <th>Name</th>
                        <th>Patronymic</th>
                        <th>Type_of_authors</th>
                    </tr>

                    <?php
                    $authors = mysqli_query($connect, query: "select authors.ID_Authors, authors.Surname,authors.Name, authors.Patronymic, type_of_authors.Name
                        from type_of_authors join authors
                        on authors.ID_Type_of_authors = type_of_authors.ID_type_of_authors order by authors.ID_Authors");
                    $authors = mysqli_fetch_all($authors);
                    foreach ($authors as $author) {
                    ?>
                        <tr>
                            <td><?= $author[0] ?></td>
                            <td><?= $author[1] ?></td>
                            <td><?= $author[2] ?></td>
                            <td><?= $author[3] ?></td>
                            <td><?= $author[4] ?></td>
                            <td><a href="php/php-handler/update_authors.php?ID_Authors=<?= $author[0] ?>">Изменить</a></td>
                            <td><a href="php/php-handler/delete_authors.php?ID_Authors=<?= $author[0] ?>">Удалить</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
            <div class="add-one">
                <form class="add_collections" action="php/php-handler/create_authors.php" method="post">
                    <input type="text" name="authors_surname" class="authors_surname" placeholder="Фамилия"> <br>
                    <input type="text" name="authors_name" class="authors_name" placeholder="Имя"> <br>
                    <input type="text" name="authors_patronymic" class="authors_patronymic" placeholder="Отчество"> <br>
                    <select name="type_of_authors" class="type_of_authors">

                        <?php $type_of_authors = mysqli_query($connect, query: "SELECT type_of_authors.Name FROM `Type_of_authors`;");
                        $type_of_authors = mysqli_fetch_all($type_of_authors);
                        foreach ($type_of_authors as $type_of_author) {
                        ?>
                            <option value="1"><?= $type_of_author[0] ?></option>
                            <option value="2"><?= $type_of_author[0] ?></option>
                            <option value="3"><?= $type_of_author[0] ?></option>
                            <option value="4"><?= $type_of_author[0] ?></option>
                            <option value="5"><?= $type_of_author[0] ?></option>
                        <?php
                        }
                        ?>
                    </select> <br>
                    <button class="add-but" type="submit">Добавить</button>
                </form>
            </div>
            <h2 class="table-name">Продажа</h2>
            <div class="table-box">
                <div class="table-one">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Date_of_sale</th>
                            <th>Sum</th>
                            <th>Count</th>
                            <th>Visitor</th>
                            <th>Exposition</th>
                            <th>Type_of_ticket</th>
                        </tr>
                        <?php
                        $sales = mysqli_query($connect, query: "select sale.ID_Sale, sale.Date_of_sale, sale.Sum, sale.Count, visitors.Surname, expositions.Name, type_of_tickets.Name
                        from visitors join sale
                        on sale.ID_Visitors = visitors.ID_Visitors JOIN expositions ON sale.ID_Expositions = expositions.ID_Expositions
                        JOIN type_of_tickets on sale.ID_Type_of_ticket = type_of_tickets.ID_Type_of_tickets order by sale.ID_Sale");
                        $sales = mysqli_fetch_all($sales);
                        foreach ($sales as $sale) {
                        ?>
                            <tr>
                                <td><?= $sale[0] ?></td>
                                <td><?= $sale[1] ?></td>
                                <td><?= $sale[2] ?></td>
                                <td><?= $sale[3] ?></td>
                                <td><?= $sale[4] ?></td>
                                <td><?= $sale[5] ?></td>
                                <td><?= $sale[6] ?></td>
                                <td><a href="php/php-handler/update_sale.php?ID_Sale=<?= $sale[0] ?>">Изменить</a></td>
                                <td><a href="php/php-handler/delete_sale.php?ID_Sale=<?= $sale[0] ?>">Удалить</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
                <div class="add-one">
                    <form class="add_collections" action="php/php-handler/create_sale.php" method="post">
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
                        <input type="text" name="date_of_sale" class="date_of_sale" placeholder="Дата продажи"> <br>
                        <input type="text" name="sum" class="sum" placeholder="Сумма"> <br>
                        <input type="text" name="count" class="count" placeholder="Количество билетов"> <br>


                        <button class="add-but" type="submit">Добавить</button>
                    </form>
                </div>
            </div>
            <h2 class="table-name">Посетители</h2>
            <div class="table-box">
                <div class="table-one">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Surname</th>
                            <th>Name</th>
                            <th>Patronymic</th>
                            <th>DOB</th>
                            <th>Email</th>
                            <th>Phone_number</th>
                            <th>Password</th>
                        </tr>
                        <?php
                        $visitors = mysqli_query($connect, query: "SELECT * FROM Visitors");
                        $visitors = mysqli_fetch_all($visitors);
                        foreach ($visitors as $visitor) {
                        ?>
                            <tr>
                                <td><?= $visitor[0] ?></td>
                                <td><?= $visitor[1] ?></td>
                                <td><?= $visitor[2] ?></td>
                                <td><?= $visitor[3] ?></td>
                                <td><?= $visitor[4] ?></td>
                                <td><?= $visitor[5] ?></td>
                                <td><?= $visitor[6] ?></td>
                                <td><?= $visitor[7] ?></td>
                                <td><a href="php/php-handler/update_visitors.php?ID_Visitors=<?= $visitor[0] ?>">Изменить</a></td>
                                <td><a href="php/php-handler/delete_visitors.php?ID_Visitors=<?= $visitor[0] ?>">Удалить</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
                <div class="add-one">
                    <form class="add_collections" action="php/php-handler/create_visitors.php" method="post">
                        <input type="text" name="visitor_surname" class="visitor_surname" placeholder="Фамилия"> <br>
                        <input type="text" name="visitor_name" class="visitor_name" placeholder="Имя"> <br>
                        <input type="text" name="visitor_patronymic" class="visitor_patronymic" placeholder="Отчество"> <br>
                        <input type="text" name="visitor_DOB" class="visitor_DOB" placeholder="Дата рождения"> <br>
                        <input type="text" name="visitor_email" class="visitor_email" placeholder="Почта"> <br>
                        <input type="text" name="visitor_phone" class="visitor_phone" placeholder="Номер телефона"> <br>
                        <input type="text" name="visitor_password" class="visitor_password" placeholder="Пароль"> <br>
                        <button class="add-but" type="submit">Добавить</button>
                    </form>
                </div>
            </div>
            <h2 class="table-name">Экспонаты</h2>
            <div class="table-box">
                <div class="table-one">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Author</th>
                            <th>Collection</th>
                            <th>Exposition</th>
                        </tr>
                        <?php
                        $exhibits = mysqli_query($connect, query: "select exhibits.ID_Exhibits, exhibits.Name, exhibits.Descriptions, authors.Surname, collections.Name, expositions.Name
                        from exhibits join authors
                        on exhibits.ID_Authors = authors.ID_Authors JOIN collections ON exhibits.ID_Collections = collections.ID_Collections
                        JOIN expositions on exhibits.ID_Expositions = expositions.ID_Expositions order by exhibits.ID_Exhibits");
                        $exhibits = mysqli_fetch_all($exhibits);
                        foreach ($exhibits as $exhibit) {
                        ?>
                            <tr>
                                <td><?= $exhibit[0] ?></td>
                                <td><?= $exhibit[1] ?></td>
                                <td><?= $exhibit[2] ?></td>
                                <td><?= $exhibit[3] ?></td>
                                <td><?= $exhibit[4] ?></td>
                                <td><?= $exhibit[5] ?></td>
                                <td><a href="php/php-handler/update_exhibit.php?ID_Exhibits=<?= $exhibit[0] ?>">Изменить</a></td>
                                <td><a href="php/php-handler/delete_exhibit.php?ID_Exhibits=<?= $exhibit[0] ?>">Удалить</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
                <div class="add-one">
                    <form class="add_collections" action="php/php-handler/create_exhibit.php" method="post">
                        <input type="text" name="exhibit_name" class="exhibit_name" placeholder="Наименование"> <br>
                        <input type="text" name="description" class="description" placeholder="Описание"> <br>
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
                        <button class="add-but" type="submit">Добавить</button>
                    </form>
                </div>
            </div>
            <h2 class="table-name">Выставки</h2>
            <div class="table-box">
                <div class="table-one">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Start_date</th>
                            <th>End_date</th>
                        </tr>
                        <?php
                        $expositions = mysqli_query($connect, query: "SELECT * FROM Expositions");
                        $expositions = mysqli_fetch_all($expositions);
                        foreach ($expositions as $exposition) {
                        ?>
                            <tr>
                                <td><?= $exposition[0] ?></td>
                                <td><?= $exposition[1] ?></td>
                                <td><?= $exposition[2] ?></td>
                                <td><?= $exposition[3] ?></td>
                                <td><a href="php/php-handler/update_expositions.php?ID_Expositions=<?= $exposition[0] ?>">Изменить</a></td>
                                <td><a href="php/php-handler/delete_expositions.php?ID_Expositions=<?= $exposition[0] ?>">Удалить</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
                <div class="add-one">
                    <form class="add_collections" action="php/php-handler/create_expositions.php" method="post">
                        <input type="text" name="exposition_name" class="exposition_name" placeholder="Наименование"> <br>
                        <input type="text" name="start_date" class="start_date" placeholder="Дата начала"> <br>
                        <input type="text" name="end_date" class="end_date" placeholder="Дата окончания"> <br>
                        <button class="add-but" type="submit">Добавить</button>
                    </form>
                </div>
            </div>
            <h2 class="table-name">Список всех экспонатов в музее</h2>
            <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
            <?php
            $zapros1 = mysqli_query($connect, query: "SELECT exhibits.ID_Exhibits, exhibits.Name FROM `Exhibits`");
            $zapros1 = mysqli_fetch_all($zapros1);
            foreach ($zapros1 as $zapros11) {
            ?>
                <tr>
                    <td><?= $zapros11[0] ?></td>
                    <td><?= $zapros11[1] ?></td>
                </tr>
            <?php
            }
            ?>
            </table>
            <h2 class="table-name">Все художники, представленные в музее</h2>
            <table>
                        <tr>
                            <th>ID</th>
                            <th>Surname</th>
                            <th>Name</th>
                            <th>Patronymic</th>
                        </tr>
            <?php
            $zapros2 = mysqli_query($connect, query: "SELECT authors.ID_Authors, authors.Surname, authors.Name, authors.Patronymic FROM Authors WHERE Authors.ID_Type_of_authors=1");
            $zapros2 = mysqli_fetch_all($zapros2);
            foreach ($zapros2 as $zapros22) {
            ?>
                <tr>
                    <td><?= $zapros22[0] ?></td>
                    <td><?= $zapros22[1] ?></td>
                    <td><?= $zapros22[2] ?></td>
                    <td><?= $zapros22[3] ?></td>
                </tr>
            <?php
            }
            ?>
            </table>
            <h2 class="table-name">Список экспонатов художника Свешникова</h2>
            <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
            <?php
            $zapros3 = mysqli_query($connect, query: "SELECT exhibits.ID_Exhibits, exhibits.Name FROM Exhibits WHERE Exhibits.ID_Authors=4;");
            $zapros3 = mysqli_fetch_all($zapros3);
            foreach ($zapros3 as $zapros33) {
            ?>
                <tr>
                    <td><?= $zapros33[0] ?></td>
                    <td><?= $zapros33[1] ?></td>
                </tr>
            <?php
            }
            ?>
            </table>
            <h2 class="table-name">Список выставок, доступных с 1.05.2023 по 1.07.2023</h2>
            <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Start_date</th>
                            <th>End_date</th>
                        </tr>
            <?php
            $zapros4 = mysqli_query($connect, query: "SELECT * FROM Expositions where Expositions.Start_date >= '2023-05-01' AND Expositions.End_date <= '2023-07-01'");
            $zapros4 = mysqli_fetch_all($zapros4);
            foreach ($zapros4 as $zapros44) {
            ?>
                <tr>
                    <td><?= $zapros44[0] ?></td>
                    <td><?= $zapros44[1] ?></td>
                    <td><?= $zapros44[2] ?></td>
                    <td><?= $zapros44[3] ?></td>
                </tr>
            <?php
            }
            ?>
            </table>
            <h2 class="table-name">Общее количество экспонатов каждого типа в музее</h2>
            <table>
                        <tr>
                            <th>ID</th>
                            <th>Count</th>
                            <th>Name</th>
                        </tr>
            <?php
            $zapros5 = mysqli_query($connect, query: "select collections.ID_Collections, COUNT(*), collections.Name 
            from collections join exhibits
            on collections.ID_Collections = exhibits.ID_Collections GROUP BY ID_Collections");
            $zapros5 = mysqli_fetch_all($zapros5);
            foreach ($zapros5 as $zapros55) {
            ?>
                <tr>
                    <td><?= $zapros55[0] ?></td>
                    <td><?= $zapros55[1] ?></td>
                    <td><?= $zapros55[2] ?></td>
                </tr>
            <?php
            }
            ?>
            </table>
            <h2 class="table-name">Количество проданных билетов с 1.06.2023 по 1.07.2023</h2>
            <table>
                        <tr>
                            <th>Count</th>
                        </tr>
            <?php
            $zapros6 = mysqli_query($connect, query: "SELECT COUNT(*) AS kolvo FROM Sale WHERE Date_of_sale BETWEEN '2023-06-01' AND '2023-07-01'");
            $zapros6 = mysqli_fetch_all($zapros6);
            foreach ($zapros6 as $zapros66) {
            ?>
                <tr>
                    <td><?= $zapros66[0] ?></td>
                </tr>
            <?php
            }
            ?>
            </table>
            <h2 class="table-name">Список выставок, прошедших в 2023 году</h2>
            <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
            <?php
            $zapros7 = mysqli_query($connect, query: "SELECT expositions.ID_Expositions, expositions.Name FROM Expositions WHERE Expositions.Start_date >= '2023-01-01' AND Expositions.End_date <= '2023-12-31'");
            $zapros7 = mysqli_fetch_all($zapros7);
            foreach ($zapros7 as $zapros77) {
            ?>
                <tr>
                    <td><?= $zapros77[0] ?></td>
                    <td><?= $zapros77[1] ?></td>
                </tr>
            <?php
            }
            ?>
            </table>
            <h2 class="table-name">Список посетителей, посетивших экспозицию "Дневник Мастера и Маргариты" по студенческому билету</h2>
            <table>
                        <tr>
                            <th>Visitor</th>
                        </tr>
            <?php
            $zapros8 = mysqli_query($connect, query: "SELECT CONCAT(Visitors.Surname,' ',Visitors.Name,' ',Visitors.Patrinymic) FROM Visitors, Sale WHERE Visitors.ID_Visitors = Sale.ID_Visitors AND
            sale.ID_Expositions = 2 AND Sale.ID_Type_of_ticket = 3");
            $zapros8 = mysqli_fetch_all($zapros8);
            foreach ($zapros8 as $zapros88) {
            ?>
                <tr>
                    <td><?= $zapros88[0] ?></td>
                </tr>
            <?php
            }
            ?>
            </table>
            <h2 class="table-name">Список посетителей, которые приобрели билет на выставку после 1.06.2023</h2>
            <table>
                        <tr>
                            <th>Visitor</th>
                        </tr>
            <?php
            $zapros9 = mysqli_query($connect, query: "SELECT CONCAT(Visitors.Surname,' ',Visitors.Name,' ',Visitors.Patrinymic) 
            FROM Visitors, Sale 
            WHERE 
            Visitors.ID_Visitors = Sale.ID_Visitors
            AND
            Sale.Date_of_sale > '2023-06-01'");
            $zapros9 = mysqli_fetch_all($zapros9);
            foreach ($zapros9 as $zapros99) {
            ?>
                <tr>
                    <td><?= $zapros99[0] ?></td>
                </tr>
            <?php
            }
            ?>
            </table>
            <h2 class="table-name">Список авторов экспонатов, представленных в музее</h2>
            <table>
                        <tr>
                            <th>Author</th>
                        </tr>
            <?php
            $zapros10 = mysqli_query($connect, query: "SELECT CONCAT(Authors.Surname,' ',Authors.Name) FROM Authors;");
            $zapros10 = mysqli_fetch_all($zapros10);
            foreach ($zapros10 as $zapros100) {
            ?>
                <tr>
                    <td><?= $zapros100[0] ?></td>
                </tr>
            <?php
            }
            ?>
            </table>
        </div>
    </main>
</body>

</html>