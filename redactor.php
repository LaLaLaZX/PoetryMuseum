<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактировать данные</title>
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
                <a href="contacts.php" class="nav-text">Контакты</a>
                <a class="nav"><img src="images/user.svg" alt="Профиль" class="user"></a>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="redactor-box">
                <form class="redactor-form-box" action="php/php-handler/create_profile.php" method="post">
                    <div class="input-box">
                        <input type="text" name="name" placeholder="Имя" />
                    </div>
                    <div class="input-box">
                        <input type="text" name="surname" placeholder="Фамилия" />
                    </div>
                    <div class="input-box">
                        <input type="text" name="patronymic" placeholder="Отчество" />
                    </div>
                    <div class="input-box">
                        <input type="text" name="DOB" placeholder="Дата рождения" />
                    </div>
                    <div class="input-box">
                        <input type="text" name="email" placeholder="Почта" />
                    </div>
                    <div class="input-box">
                        <input type="text" name="phone" placeholder="Номер телефона" />
                    </div>
                    <button class="contacts-but">Отправить</button>
                </div>
                <!-- <div class="redactor-img-box">
                    <img src="images/downloadimg.png" alt="Загрузите фотографию" class="redactor-img">
                </div> -->
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="footer-box">
                <div class="first-footer">
                    <a href="index.php" class="nav-foot"><img src="images/PoetryMuseum.png" alt="Логотип"
                            class="logo-foot"></a>
                    <a href="history.php" class="nav-foot-text">История музея</a>
                    <a href="collections.php" class="nav-foot-text">Коллекции</a>
                    <a href="#" class="nav-foot-text">Выставки</a>
                    <a href="contacts.php" class="nav-foot-text">Контакты</a>
                </div>
                <div class="second-footer">
                    <img src="images/vk.png" alt="Вконтакте">
                    <img src="images/telegram.png" alt="Телеграм">
                    <img src="images/twitter.png" alt="Твиттер">
                </div>
                <div class="third-footer">
                    <p class="foot-text">© Литературный музей PoetryMuseum</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="./js/modal.js"></script>
</body>

</html>