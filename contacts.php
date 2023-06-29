<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
    <div class="authoriz"> <!--контейнер-->
            <a class="btn-close"><img src="images/close.png" alt="Закрыть" class="close-bt"></a> <!--ссылка-->
            <form action="php/validate_form_login.php" method="post" class="auth-form">
                <div class="auth-container">
                    <h1 class="authoriz-title">Авторизация</h1> <!--заголовок-->
                    <input class="number-authoriz" name="login" type="text" placeholder="Почта"> <!--инпут-->
                    <input class="number-authoriz" name="password" type="password" placeholder="Пароль">
                    <button class="bt-authoriz" type="submit">Войти</button>
                    <a class="to-register">
                        <p class="text-to-register">Нет аккаунта? Зарегистрироваться</p>
                    </a>
                </div>
            </form>
            <div class="message">
                <?php
                    if (isset($_SESSION['message'])) {
                        echo '<p class="msg">' . $_SESSION['message'] . '</p>';
                    } else {
                        echo '';
                    }
                    unset($_SESSION['message']);
                ?>
            </div>
        </div>
        <div class="register">
            <a class="btn-close"><img src="images/close.png" alt="Закрыть" class="close-bt_2"></a>
            <div class="auth-container">
                <h1 class="authoriz-title">Регистрация</h1>
                <input class="number-authoriz" type="text" placeholder="Почта">
                <input class="number-authoriz" type="text" placeholder="Пароль">
                <input class="number-authoriz" type="text" placeholder="Повторите пароль">
                <button class="bt-authoriz">Зарегистрироваться</button>
                <a href="#" class="to-login">
                    <p class="text-to-login">Уже есть аккаунт? Войти</p>
                </a>
            </div>
        </div>
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
            <h1 class="contacts-title">Контакты</h1>
            <div class="contacts-box">
                <div class="contacts-left-box">
                    <div class="contacts-text-box">
                        <div class="text-box-one">
                            <p class="contacts-text">Телефон</p>
                            <p class="contacts-text">Почта</p>
                            <p class="contacts-text">Адрес</p>
                            <p class="contacts-text">Часы работы</p>
                        </div>
                        <div class="text-box-two">
                            <p class="contacts-text">+7 495 695-53-08</p>
                            <p class="contacts-text">mailto:ex@goslitmuz.ru</p>
                            <p class="contacts-text">Монетчиковский пер., 36, Москва</p>
                            <p class="contacts-text">Ежедневно 10:00 - 18:00</p>
                        </div>
                    </div>
                    <div class="contacts-form-box">
                        <div class="input-box">
                            <input type="text" placeholder="Почта" />
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Сообщение" />
                        </div>
                        <button class="contacts-but">Отправить</button>
                    </div>
                </div>
                <div class="contacts-right-box">
                    <div class="carta" style="position:relative;overflow:hidden;"><a
                            href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps"
                            style="color:#eee;font-size:12px;position:absolute;top:0px;">Москва</a><a
                            href="https://yandex.ru/maps/213/moscow/?ll=37.617700%2C55.755863&utm_medium=mapframe&utm_source=maps&z=10"
                            style="color:#eee;font-size:12px;position:absolute;top:14px;">Яндекс Карты — транспорт, навигация, поиск мест</a>
                            <iframe src="https://yandex.ru/map-widget/v1/?ll=37.617700%2C55.755863&z=10" width="560"
                            height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
                    </div>
                </div>
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
                    <img src="images/vk.png" alt="Вконтакте" class="social">
                    <img src="images/telegram.png" alt="Телеграм" class="social">
                    <img src="images/twitter.png" alt="Твиттер" class="social">
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