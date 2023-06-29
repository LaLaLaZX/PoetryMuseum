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
    <title>Экспонаты</title>
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
                <a href="expositions.php" class="nav-text">Выставки</a>
                <a href="contacts.php" class="nav-text">Контакты</a>
                <a class="nav"><img src="images/user.svg" alt="Профиль" class="user"></a>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <h1 class="exhibits-title">Коллекция книг</h1>
            <p class="exhibits-text">Коллекция отдела книжных фондов Литературного музея PoetryMuseum насчитывает свыше
                300 000 томов и отражает всю историю книгопечатания в России от «Апостола» Ивана Фёдорова (1564) до
                наших дней. Среди раритетов собрания - «Киево-Печерский патерик» (1702), первые книги гражданской печати
                петровского времени, один из 18 известных экземпляров «Путешествия из Петербурга в Москву» А. Н.
                Радищева, все прижизненные издания М. В. Ломоносова, Г. Р. Державина, А. С. Грибоедова, А. С. Пушкина,
                Н. А. Некрасова, Л. Н. Толстого, В. Я. Брюсова, В. В. Розанова, П. А. Флоренского, М. А. Булгакова, М.
                М. Пришвина, А. Н. Толстого, Б. Л. Пастернака, К. И. Чуковского и др. В фонде богато представлены
                периодика и альманахи XVIII-XXI веков, книги, вышедшие малыми тиражами (5-20 экземпляров), миниатюрные
                издания.</p>
            <p class="exhibits-text">О фонде книг с автографами писателей, общественных деятелей, в том числе и
                декабристов, основатель музея и его первый директор В. Д. Бонч-Бруевич писал в 1951 году: «Я отлично
                знаю, что нигде в СССР, нигде за границей, ни в Европе, ни в Америке - решительно нигде нет и не было
                подобного собрания: ни в Музеях, ни в библиотеках, и только у нас… организован этот оригинальный фонд».
                Сегодня он насчитывает свыше 18 000 книг. В состав музейного книжного собрания вошли библиотеки многих
                известных писателей, учёных, библиофилов Демьяна Бедного, А. Н. Толстого, В. Я. Брюсова, М. М. Пришвина,
                А. А. Фадеева, семей Срезневских, Гротов, книги из собрания А.Крученых и др. Книжная коллекция
                Государственного литературного музея столь обширна и разнообразна, что с её помощью можно
                проиллюстрировать практически всю историю отечественной литературы.</p>
            <div class="collection-box">
                <div class="collection">
                    <a class="collection-link" href="card.php"><img src="images/books1.png" alt="Сочинения Пушкина"
                            class="collection-img"></a>
                    <a class="collection-link" href="">
                        <p class="collection-text">Сочинения Пушкина</p>
                    </a>
                </div>
                <div class="collection">
                    <a class="collection-link" href=""><img src="images/books2.png"
                            alt="Новейшее основание и практика артиллерии" class="collection-img"></a>
                    <a class="collection-link" href="">
                        <p class="collection-text">Новейшее основание и практика артиллерии</p>
                    </a>
                </div>
                <div class="collection">
                    <a class="collection-link" href=""><img src="images/books3.png" alt="Жуковский В.А. Певец на Кремле"
                            class="collection-img"></a>
                    <a class="collection-link" href="">
                        <p class="collection-text">Жуковский В.А. Певец на Кремле</p>
                    </a>
                </div>
                <div class="collection">
                    <a class="collection-link" href=""><img src="images/books4.png" alt="Полярная звезда на 1855 год"
                            class="collection-img"></a>
                    <a class="collection-link" href="">
                        <p class="collection-text">Полярная звезда на 1855 год</p>
                    </a>
                </div>
            </div>
            <div class="collection-box">
                <div class="collection">
                    <a class="collection-link" href=""><img src="images/books5.png" alt="Пришвин М. Записки охотника"
                            class="collection-img"></a>
                    <a class="collection-link" href="">
                        <p class="collection-text">Пришвин М. Записки охотника</p>
                    </a>
                </div>
                <div class="collection">
                    <a class="collection-link" href=""><img src="images/books6.png" alt="Булгаков М. Дьяволиада"
                            class="collection-img"></a>
                    <a class="collection-link" href="">
                        <p class="collection-text">Булгаков М. Дьяволиада</p>
                    </a>
                </div>
                <div class="collection">
                    <a class="collection-link" href=""><img src="images/books7.png" alt="Фадеев А. Против течения"
                            class="collection-img"></a>
                    <a class="collection-link" href="">
                        <p class="collection-text">Фадеев А. Против течения</p>
                    </a>
                </div>
                <div class="collection">
                    <a class="collection-link" href=""><img src="images/books8.png" alt="Радищев А. Сочинения"
                            class="collection-img"></a>
                    <a class="collection-link" href="">
                        <p class="collection-text">Радищев А. Сочинения</p>
                    </a>
                </div>
            </div>
        </div>
        <img src="images/bottomimg4.png" alt="Музей" class="bottom-img">
    </main>
    <footer>
        <div class="container">
            <div class="footer-box">
                <div class="first-footer">
                    <a href="index.php" class="nav-foot"><img src="images/PoetryMuseum.png" alt="Логотип"
                            class="logo-foot"></a>
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
    <script src="./js/modal.js"></script>
</body>

</html>