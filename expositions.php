<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Выставки</title>
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
                <a href="history.php" class="nav-text">История музея</a>
                <a href="collections.php" class="nav-text">Коллекции</a>
                <a href="#" class="nav-text">Выставки</a>
                <a href="contacts.php" class="nav-text">Контакты</a>
                <a class="nav"><img src="images/user.svg" alt="Профиль" class="user"></a>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <h1 class="exposition-title">Выставки</h1>
            <div class="news-one-box">
                <div class="news">
                    <img src="images/exposition1.png" alt="Выставки" class="new-img">
                    <p class="new-text-first">Экспозиция «Дневник Мастера и Маргариты. Михаил и Елена Булгаковы»</p>
                </div>
                <div class="news">
                    <img src="images/exposition2.png" alt="Выставки" class="new-img">
                    <p class="new-text-first">Выставка “Охотник милосердный и ретивый”</p>
                </div>
                <div class="news">
                    <img src="images/exposition3.png" alt="Выставки" class="new-img">
                    <p class="new-text-first">Выставка «Именины Гоголя»</p>
                </div>
            </div>
            <div class="buttons-box">
                <a href="pay.php" class="exposition-link"><button class="exposition-but">Купить билет</button></a>
                <a href="#" class="exposition-link"><button class="exposition-but">Купить билет</button></a>
                <a href="#" class="exposition-link"><button class="exposition-but">Купить билет</button></a>
            </div>
            <div class="news-two-box">
                <div class="news">
                    <img src="images/exposition4.png" alt="Выставки" class="new-img">
                    <p class="new-text-first">Выставка “Театр Островского. Контексты”</p>
                </div>
                <div class="news">
                    <img src="images/exposition5.png" alt="Выставки" class="new-img">
                    <p class="new-text-first">Выставка «Звери и люди: „детская“ история издателя Г.Ф. Мириманова»</p>
                </div>
                <div class="news">
                    <img src="images/exposition6.png" alt="Выставки" class="new-img">
                    <p class="new-text-first">Экспозиция «Андрей Платонов: в поисках будущего»</p>
                </div>
            </div>
            <div class="buttons-box">
                <a href="#" class="exposition-link"><button class="exposition-but">Купить билет</button></a>
                <a href="#" class="exposition-link"><button class="exposition-but">Купить билет</button></a>
                <a href="#" class="exposition-link"><button class="exposition-but">Купить билет</button></a>
            </div>
        </div>
        <img src="images/bottomimg6.png" alt="Музей" class="bottom-img">
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