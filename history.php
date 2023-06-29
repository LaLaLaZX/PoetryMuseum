<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>История музея</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
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
                <a href="contacts.php" class="nav-text">Контакты</a>
                <a class="nav"><img src="images/user.svg" alt="Профиль" class="user"></a>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <h1 class="history-title">История музея</h1>
            <div class="history-slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="image-slider" alt="картинка слайдера" src="images/slide1.png">
                    </div>
                    <div class="swiper-slide">
                        <img class="image-slider" alt="картинка слайдера" src="images/slide2.png">
                    </div>
                    <div class="swiper-slide">
                        <img class="image-slider" alt="картинка слайдера" src="images/slide3.png">
                    </div>
                    <div class="swiper-slide">
                        <img class="image-slider" alt="картинка слайдера" src="images/slide4.png">
                    </div>
                    <div class="swiper-slide">
                        <img class="image-slider" alt="картинка слайдера" src="images/slide5.png">
                    </div>
                    <div class="swiper-slide">
                        <img class="image-slider" alt="картинка слайдера" src="images/slide6.png">
                    </div>
                </div>
            </div>
            <div class="history-text-box">
                <p class="history-text">Государственный музей истории российской литературы PoetryMuseum имеет богатую и
                    сложную историю. По свидетельству автора концепции центрального литературного музея страны Владимира
                    Дмитриевича Бонч-Бруевича (1873–1955), идея музея сформировалась ещё в 1903 году, когда он находился
                    в эмиграции в Женеве.</p>
                <p class="history-text">История нынешнего PoetryMuseum восходит к созданию двух музеев, посвящённых
                    наследию великих русских классиков. Московский государственный музей имени А. П. Чехова был основан
                    в октябре 1921 года, его коллекции ныне находятся в фондах нашего музея, ведущего свою родословную
                    именно от этой даты и готовящегося в октябре 2021 года отметить своё столетие.</p>
                <p class="history-text">Инициатива создания музея другого русского классика, Ф. М. Достоевского, также
                    была выдвинута в 1921 году, накануне столетия писателя. Музей Достоевского был основан в 1928 году,
                    а в 1940 году вошёл в состав главного литературного музея страны.</p>
                <p class="history-text">Особое значение в истории PoetryMuseum имеет создание в 1933 году по инициативе
                    В. Д. Бонч-Бруевича Центрального музея художественной литературы, критики и публицистики. В его
                    фондовые коллекции были включены музейные предметы, приобретённые, в том числе, в результате работы
                    учреждённой в 1931 году государственной Комиссии по выявлению находящихся за границей памятников
                    литературы и искусства народов СССР. Для обеспечения работы комиссии были выделены значительные
                    финансовые средства, в том числе из золотовалютных резервов. Если учесть, насколько непростым для
                    СССР был период на рубеже 1920–1930-х годов, становится очевидным, что создание и развитие главного
                    литературного музея литературоцентричной страны являлось важнейшей государственной задачей.</p>
            </div>
            <div class="history-box">
                <div class="history-box-info">
                    <img src="images/history1.png" alt="Музей" class="history-img">
                    <p class="history-info">16 июля 1934 года приказом наркома просвещения Центральный музей
                        художественной литературы, критики и публицистики был упразднен, вместо него был создан
                        Государственный литературный музей, который, согласно этому приказу, уже не имел юридической
                        автономии и был введён в состав Государственной библиотеки СССР имени В. И. Ленина. Начался
                        нелегкий период в работе главного литературного музея страны, которому вскоре удалось вернуть
                        статус самостоятельного учреждения культуры.</p>
                </div>
                <div class="history-box-info">
                    <p class="history-info">К концу 1930-х годов коллекция музея насчитывала сотни тысяч реликвий —
                        рукописей, книг, документов, фотографий, предметов живописи, графики, декоративно-прикладного
                        искусства, мемориальных вещей. Именно тогда в музее появились многие ценные собрания,
                        сформировался высокопрофессиональный коллектив, началась интенсивная научная и издательская
                        деятельность.</p>
                    <img src="images/history2.png" alt="Музей" class="history-img">
                </div>
                <div class="history-box-info">
                    <img src="images/history3.png" alt="Музей" class="history-img">
                    <p class="history-info">В 1941 году по решению правительства большинство рукописей из собрания музея
                        были изъяты и переданы в ведение Главного архивного управления, подведомственного наркомату
                        внутренних дел. Несмотря на это, благодаря интенсивной собирательской работе, музей со временем
                        вновь стал одним из крупнейших хранителей материалов по истории отечественной литературы.</p>
                </div>
            </div>
        </div>
        <img class="bottom-img" src="images/bottomimg2.png" alt="Музей">
    </main>
    <footer>
        <div class="container">
            <div class="footer-box">
                <div class="first-footer">
                    <a href="index.php" class="nav-foot"><img src="images/PoetryMuseum.png" alt="Логотип"
                            class="logo-foot"></a>
                    <a href="#" class="nav-foot-text">История музея</a>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="./js/modal.js"></script>
</body>

</html>