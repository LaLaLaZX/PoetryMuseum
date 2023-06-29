<?php
session_start();
include("./php/php-connect/connect.php");
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PoetryMuseum</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
</head>

<body>
    <header> <!--хэдер-->
        <div class="authoriz"> <!--контейнер-->
            <a class="btn-close"><img src="images/close.png" alt="Закрыть" class="close-bt"></a> <!--ссылка-->
            <form action="php/validate_form_login.php" id="auth-form" class="auth-form">
                <div class="auth-container">
                    <h1 class="authoriz-title">Авторизация</h1> <!--заголовок-->
                    <input class="number-authoriz" name="login" id="form_login" type="text" placeholder="Почта"> <!--инпут-->
                    <input class="number-authoriz" name="password" id="form_password" type="password" placeholder="Пароль">
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
            <form action="php/php-handler/reg.php" method="post" class="reg-form">
                <div class="auth-container">
                    <h1 class="authoriz-title">Регистрация</h1>
                    <input class="number-authoriz" name="login" type="text" placeholder="Почта">
                    <input class="number-authoriz" name="password" type="password" placeholder="Пароль">
                    <input class="number-authoriz" name="confirmpassword" type="password" placeholder="Повторите пароль">
                    <button class="bt-authoriz" type="submit">Зарегистрироваться</button> <!--кнопка-->
                    <a href="#" class="to-login">
                        <p class="text-to-login">Уже есть аккаунт? Войти</p>
                    </a> <!--ссылка и параграф-->
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
        <script>

        </script>
        <div class="item">
            <div class="first-img">
                <div class="container">
                    <div class="navigation-one">
                        <a href="#" class="nav"><img src="images/PoetryMuseum.png" alt="Логотип" class="logo"></a>
                        <a href="history.php" class="nav-text">История музея</a>
                        <a href="collections.php" class="nav-text">Коллекции</a>
                        <a href="expositions.php" class="nav-text">Выставки</a>
                        <a href="contacts.php" class="nav-text">Контакты</a>
                        <a class="nav"><img src="images/user.svg" alt="Профиль" class="user"></a>
                    </div>
                </div>
                <a class="previous" onclick="previousSlide()"></a>
                <img class="slider-img" src="images/main1.png" alt="картинка слайдера"> <!--картинка-->
                <a class="next" onclick="nextSlide()"></a>
            </div>
        </div>

        <!-- Второй слайд -->
        <div class="item">
            <div class="second-img">
                <div class="container">
                    <div class="navigation-two">
                        <a href="#" class="nav"><img src="images/PoetryMuseum.png" alt="Логотип" class="logo"></a>
                        <a href="history.php" class="nav-text">История музея</a>
                        <a href="collections.php" class="nav-text">Коллекции</a>
                        <a href="expositions.php" class="nav-text">Выставки</a>
                        <a href="contacts.php" class="nav-text">Контакты</a>
                        <a class="nav"><img src="images/user.svg" alt="Профиль" class="user2"></a>
                    </div>
                </div>
                <a class="previous" onclick="previousSlide()"></a>
                <img class="slider-img" src="images/main2.png" alt="картинка слайдера">
                <a class="next" onclick="nextSlide()"></a>
            </div>
        </div>

        <!-- Третий слайд -->
        <div class="item">
            <div class="third-img">
                <div class="container">
                    <div class="navigation-three">
                        <a href="#" class="nav"><img src="images/PoetryMuseum.png" alt="Логотип" class="logo"></a>
                        <a href="history.php" class="nav-text">История музея</a>
                        <a href="collections.php" class="nav-text">Коллекции</a>
                        <a href="expositions.php" class="nav-text">Выставки</a>
                        <a href="contacts.php" class="nav-text">Контакты</a>
                        <a class="nav"><img src="images/user.svg" alt="Профиль" class="user3"></a>
                    </div>
                </div>
                <a class="previous" onclick="previousSlide()"></a>
                <img class="slider-img" src="images/main3.png" alt="картинка слайдера">
                <a href="#" class="next" onclick="nextSlide()"></a>
            </div>
        </div>
    </header>
    <main> <!--главная часть-->
        <div class="main-box">
            <div class="container">
                <h1 class="main-title">Новости</h1>
                <div class="news-one-box">
                    <div class="news">
                        <img src="images/new1.png" alt="Новости" class="new-img">
                        <p class="new-text-first">Пешеходная экскурсия «Театральный “роман” Михаила Булгакова»</p>
                        <!--параграф-->
                        <p class="new-text-second">2 июня 2023</p>
                    </div>
                    <div class="news">
                        <img src="images/new2.png" alt="Новости" class="new-img">
                        <p class="new-text-first">Экспозиция «Дневник Мастера и Маргариты. Михаил и Елена Булгаковы»</p>
                        <p class="new-text-second">9 марта 2023</p>
                    </div>
                    <div class="news">
                        <img src="images/new3.png" alt="Новости" class="new-img">
                        <p class="new-text-first">Выставка «Именины Гоголя» с экскурсоводом Аркадием Носороговым</p>
                        <p class="new-text-second">18 мая 2023</p>
                    </div>
                </div>
                <div class="news-two-box">
                    <div class="news">
                        <img src="images/new4.png" alt="Новости" class="new-img">
                        <p class="new-text-first">Выставочный проект «Театр Островского. Контексты»</p>
                        <p class="new-text-second">16 февраля — 13 июля 2023</p>
                    </div>
                    <div class="news">
                        <img src="images/new5.png" alt="Новости" class="new-img">
                        <p class="new-text-first">Выставка «Звери и люди: „детская“ история издателя Г.Ф. Мириманова»
                        </p>
                        <p class="new-text-second">13 апреля — 16 июля 2023</p>
                    </div>
                    <div class="news">
                        <img src="images/new6.png" alt="Новости" class="new-img">
                        <p class="new-text-first">Выставка «Валенки 57 размера, или “Слушай, дерево”»</p>
                        <p class="new-text-second">9 декабря 2023</p>
                    </div>
                </div>
                <h1 class="main-title">О музее</h1>
                <div class="about-box">
                    <p class="about-text">Литературный музей PoetryMuseum — крупнейший литературный музей в России и
                        один из крупнейших в мире, за годы своего существования он стал одним из самых богатых хранилищ
                        книг, рукописей, личных вещей писателей и предметов искусства, центром научных исследований
                        отечественной литературы, а также методическим центром для российских музеев.</p>
                    <img src="images/about1.png" alt="Музей" class="about-img">
                </div>
                <div class="about-box">
                    <img src="images/about2.png" alt="Музей" class="about-img">
                    <p class="about-text">В фондах музея хранятся уникальные экспонаты, представляющие историю русской
                        книжной культуры и чтения более чем за полутысячелетний срок, экспозиции музея находятся на 12
                        разных площадках и рассказывают об истории литературы с XVII в. до настоящего времени.</p>
                </div>
                <div class="about-box">
                    <p class="about-text">Цель нашего музея - сохранение и популяризация литературного наследия,
                        просвещение и образование посетителей, а также создание условий для исследования и изучения
                        литературных произведений и авторов. </p>
                    <img src="images/about3.png" alt="Музей" class="about-img">
                </div>
            </div>
            <img class="bottom-img" src="images/bottomimg1.png" alt="Музей">
        </div>
    </main>
    <footer> <!--футер-->
        <div class="container">
            <div class="footer-box">
                <div class="first-footer">
                    <a href="#" class="nav-foot"><img src="images/PoetryMuseum.png" alt="Логотип" class="logo-foot"></a>
                    <a href="history.php" class="nav-foot-text">История музея</a>
                    <a href="collections.php" class="nav-foot-text">Коллекции</a>
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
    <script src="./js/modal.js"></script> <!--подключение скриптов-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        <?php


        ?>

        $(document).ready(function() {
            $("#auth-form").submit(function(e) { // задаем функцию при отправке формы
                e.preventDefault(); // отменяем действие события по умолчанию
                $.ajax({
                    url: 'php/validate_form_login.php',
                    method: 'post',
                    data: $("#auth-form").serialize(),
                    dataType: 'json',
                    success: function(data) {

                        if (data?.message === "good") {
                            window.location.replace('profile.php');

                        } else if (data?.message === "admin") {
                            window.location.replace('admin.php');
                        } else {
                            alert("Не корректный пароль или логин");
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>