<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Коллекции</title>
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
                <a href="history.php" class="nav-text">История музея</a>
                <a href="#" class="nav-text">Коллекции</a>
                <a href="expositions.php" class="nav-text">Выставки</a>
                <a href="contacts.php" class="nav-text">Контакты</a>
                <a class="nav"><img src="images/user.svg" alt="Профиль" class="user"></a>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <h1 class="collections-title">Коллекции</h1>
            <div class="collections-box">
                <div class="collection-box">
                    <div class="collection">
                        <a class="collection-link" href="exhibits.php"><img src="images/collection1.png"
                                alt="Коллекция книг" class="collection-img"></a>
                        <a class="collection-link" href="exhibits.php">
                            <p class="collection-text">Коллекция книг</p>
                        </a>
                    </div>
                    <div class="collection">
                        <a class="collection-link" href=""><img src="images/collection2.png" alt="Коллекция рукописей"
                                class="collection-img"></a>
                        <a class="collection-link" href="">
                            <p class="collection-text">Коллекция рукописей</p>
                        </a>
                    </div>
                    <div class="collection">
                        <a class="collection-link" href=""><img src="images/collection3.png" alt="Коллекция лубков"
                                class="collection-img"></a>
                        <a class="collection-link" href="">
                            <p class="collection-text">Коллекция лубков</p>
                        </a>
                    </div>
                    <div class="collection">
                        <a class="collection-link" href=""><img src="images/collection4.png" alt="Коллекция плакатов"
                                class="collection-img"></a>
                        <a class="collection-link" href="">
                            <p class="collection-text">Коллекция плакатов</p>
                        </a>
                    </div>
                </div>
                <div class="collection-box">
                    <div class="collection">
                        <a class="collection-link" href=""><img src="images/collection5.png"
                                alt="Коллекция печатной графики" class="collection-img"></a>
                        <a class="collection-link" href="">
                            <p class="collection-text">Коллекция печатной графики</p>
                        </a>
                    </div>
                    <div class="collection">
                        <a class="collection-link" href=""><img src="images/collection6.png"
                                alt="Коллекция оригинальной графики" class="collection-img"></a>
                        <a class="collection-link" href="">
                            <p class="collection-text">Коллекция оригинальной графики</p>
                        </a>
                    </div>
                    <div class="collection">
                        <a class="collection-link" href=""><img src="images/collection7.png" alt="Коллекция живописи"
                                class="collection-img"></a>
                        <a class="collection-link" href="">
                            <p class="collection-text">Коллекция живописи</p>
                        </a>
                    </div>
                    <div class="collection">
                        <a class="collection-link" href=""><img src="images/collection8.png" alt="Коллекция фотографий"
                                class="collection-img"></a>
                        <a class="collection-link" href="">
                            <p class="collection-text">Коллекция фотографий</p>
                        </a>
                    </div>
                </div>
                <div class="collection-box">
                    <div class="collection">
                        <a class="collection-link" href=""><img src="images/collection9.png"
                                alt="Коллекция предметов скульптуры" class="collection-img"></a>
                        <a class="collection-link" href="">
                            <p class="collection-text">Коллекция предметов скульптуры</p>
                        </a>
                    </div>
                    <div class="collection">
                        <a class="collection-link" href=""><img src="images/collection10.png" alt="Коллекция Окон ТАСС"
                                class="collection-img"></a>
                        <a class="collection-link" href="">
                            <p class="collection-text">Коллекция Окон ТАСС</p>
                        </a>
                    </div>
                    <div class="collection">
                        <a class="collection-link" href=""><img src="images/collection11.png"
                                alt="Коллекция предметов литераторов" class="collection-img"></a>
                        <a class="collection-link" href="">
                            <p class="collection-text">Коллекция предметов литераторов</p>
                        </a>
                    </div>
                    <div class="collection">
                        <a class="collection-link" href=""><img src="images/collection12.png"
                                alt="Собрание Ф.М. Достоевского" class="collection-img"></a>
                        <a class="collection-link" href="">
                            <p class="collection-text">Собрание Ф.М. Достоевского</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <img src="images/bottomimg3.png" alt="Музей" class="bottom-img">
    </main>
    <footer>
        <div class="container">
            <div class="footer-box">
                <div class="first-footer">
                    <a href="index.php" class="nav-foot"><img src="images/PoetryMuseum.png" alt="Логотип"
                            class="logo-foot"></a>
                    <a href="history.php" class="nav-foot-text">История музея</a>
                    <a href="#" class="nav-foot-text">Коллекции</a>
                    <a href="expositions.php" class="nav-foot-text">Выставки</a>
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