<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Pay</title>
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
            <h1 class="pay-title">Купить билет</h1>
            <div class="button-box">
                <button class="date">6 июля</button>
                <button class="date">7 июля</button>
                <button class="date">8 июля</button>
                <button class="date">9 июля</button>
                <button class="date">10 июля</button>
                <button class="date">11 июля</button>
            </div>
            <p class="information">Доступное количество билетов: 100</p>
            <div class="head-table">
                <div class="categories">
                    <p class="categories-text">Категория</p>
                </div>
                <div class="inf">
                    <p class="inf-text">Цена</p>
                    <p class="inf-text">Количество</p>
                    <p class="inf-text">Сумма</p>
                </div>
            </div>
            <div class="table">
                <div class="table-container">
                    <div class="table-line">
                        <div class="left-text">
                            <p class="line-text">Взрослые (без льгот)</p>
                        </div>
                        <div class="right-text">
                            <div class="line-text counter__cost">200.00</div>
                            <div class="counter" data-counter>
                                <div class="counter__button counter__button_minus">-</div>
                                <div class="counter__input"><input class="count-input" type="text" disabled placeholder="0"></div>
                                <div class="counter__button counter__button_plus">+</div>
                            </div>
                            <div class="line-text counter__num">0.00</div>
                        </div>
                    </div>
                </div>
                <hr> <!--горизонтальная линия-->
                <div class="table-container">
                    <div class="table-line">
                        <div class="left-text">
                            <p class="line-text">Студенты</p>
                        </div>
                        <div class="right-text">
                            <p class="line-text">150.00</p>
                            <div class="counter" data-counter>
                                <div class="counter__button counter__button_minus">-</div>
                                <div class="counter__input"><input class="count-input" type="text" disabled placeholder="0"></div>
                                <div class="counter__button counter__button_plus">+</div>
                            </div>
                            <p class="line-text">0.00</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="table-container">
                    <div class="table-line">
                        <div class="left-text">
                            <p class="line-text">Пенсионеры</p>
                        </div>
                        <div class="right-text">
                            <p class="line-text">150.00</p>
                            <div class="counter" data-counter>
                                <div class="counter__button counter__button_minus">-</div>
                                <div class="counter__input"><input class="count-input" type="text" disabled placeholder="0"></div>
                                <div class="counter__button counter__button_plus">+</div>
                            </div>
                            <p class="line-text">0.00</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="table-container">
                    <div class="table-line">
                        <div class="left-text">
                            <p class="line-text">Дети (до 16 лет)</p>
                        </div>
                        <div class="right-text">
                            <p class="line-text">150.00</p>
                            <div class="counter" data-counter>
                                <div class="counter__button counter__button_minus">-</div>
                                <div class="counter__input"><input class="count-input" type="text" disabled placeholder="0"></div>
                                <div class="counter__button counter__button_plus">+</div>
                            </div>
                            <p class="line-text">0.00</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="link"><button class="pay-but">Купить билет</button></a>
            <p class="text-pay">Экспозиция «Дневник Мастера и Маргариты. Михаил и Елена Булгаковы»</p>
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
    <script src="js/numbers.js"></script>
    <script src="./js/modal.js"></script>
</body>

</html>