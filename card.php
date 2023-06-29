<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Карточка экспоната</title>
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
                <a href="collections.php" class="nav-text">Коллекции</a>
                <a href="expositions.php" class="nav-text">Выставки</a>
                <a href="contacts.php" class="nav-text">Контакты</a>
                <a class="nav"><img src="images/user.svg" alt="Профиль" class="user"></a>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <h1 class="exhibits-title">Сочинения Пушкина</h1>
            <p class="exhibits-text">Пушкинские торжества в России имеют историю протяженностью более чем в полтора
                века. За это время сформировался единый ритуальный стержень мероприятий, к которому, однако, не сводима
                типология Пушкинских торжеств. Между тем началось все с издания сочинений Пушкина, предпринятого П. В.
                Анненковым (1813–1887). При описании этого проекта слово «первый» является ключевым: первым памятником
                Пушкину стало первое научное издание его сочинений, первый том которого — «Материалы для биографии
                Пушкина» — вышел в конце января 1855 года.</p>
            <p class="exhibits-text">«Биография Пушкина производит самое отрадное впечатление, — писал И. С. Тургенев 14
                (26) февраля 1855 года, — и отовсюду слышатся самые лестные отзывы труду Анненкова. Мы в благодарность
                ему намерены дать обед в четверг — надеюсь, что мое здоровье позволит мне на нем присутствовать».
                Несмотря на морозы и грипп, свирепствовавшие тогда в Петербурге, обед состоялся. Поговаривали, что у
                этого обеда была своя предыстория, что-то вроде пари, заключенного в самом начале предприятия, то есть
                еще в 1851 году, когда брат Анненкова Иван Васильевич купил у наследников Пушкина право на издание его
                сочинений, перехватив проект у Некрасова. «Ужин у Дюссо» «с трюфелями и большим количеством шампанского»
                потребовали у Анненкова друзья, узнав о приобретении. Осторожный Анненков пообещал обед, но только когда
                издание будет осуществлено.</p>
            <div class="card-box">
                <img src="images/pushkin1.png" alt="Сочинения Пушкина" class="card-img">
                <img src="images/pushkin2.png" alt="Сочинения Пушкина" class="card-img">
                <img src="images/pushkin3.png" alt="Сочинения Пушкина" class="card-img">
                <img src="images/pushkin4.png" alt="Сочинения Пушкина" class="card-img">
            </div>
        </div>
        <img src="images/bottomimg5.png" alt="Музей" class="bottom-img">
    </main>
    <footer>
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
    <script src="./js/modal.js"></script>
</body>

</html>