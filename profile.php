<?php
    session_start();
    include ("./php/php-connect/connect.php");

    // if ($_SESSION['is_admin'] === 'admin'){
    //     header('Location: admin.php');
    // }
    // var_dump($_SESSION['login']);
    // var_dump($_SESSION['is_admin']);

    if (isset($_SESSION['ID_Visitors'])) {
        $IDuser = $_SESSION['ID_Visitors'];
        if ($IDuser === '') {
            unset($IDuser);
        }
    }
    
    $qInfoTrack = "SELECT * FROM visitors WHERE ID_Visitors='$IDuser'";
    addslashes($qInfoTrack);
    $resInfoTrack = mysqli_query($connect, $qInfoTrack) or die(mysqli_error($connect));
    $InfoTrack = mysqli_fetch_object($resInfoTrack);
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title> 
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
            <h1 class="profile-title">Личный кабинет</h1>
            <div class="data-box">
                <div class="img-data-box">
                    <img src="images/profile.png" alt="Фото" class="img-data">
                </div>
                <div class="words-data-box">
                    <?php
                        
                    ?>
                    <form action="php/php-handler/create_profile.php" method="post" class="auth-form">
                    <p class="words-data" name="FIO" ><?php echo "".$InfoTrack->Surname."";?> <?php echo "".$InfoTrack->Name."";?> <?php echo "".$InfoTrack->Patrinymic."";?></p>
                    <p class="words-data" name="DOB" ><?php echo "".$InfoTrack->DOB."";?></p>
                    <p class="words-data" name="phone" ><?php echo "".$InfoTrack->Phone_number."";?></p>
                    <p class="words-data" name="email" ><?php echo "".$InfoTrack->Email."";?></p>
                    <a class="data-link" href="redactor.php"><p class="words-data-two">Редактировать данные</p></a><br>
                    </form>
                    <form action="php/php-handler/exit.php" method="post" class="auth-form">
                    <button class="exit">Выход</button>
                    </form>
                </div>
            </div>
            <h1 class="profile-title">Посещенные выставки</h1>
            <div class="visited-box">
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
            <h1 class="profile-title">Рекомендуем посетить</h1>
            <div class="recommended-box">
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
        </div>
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