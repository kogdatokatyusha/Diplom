<?php
require_once 'config/connect.php' //подключение к БД
?>

<!doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <link rel="stylesheet" href="mainn.css">

    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
<header>
    <nav role='navigation'>
        <div>
            <image src="assets/logo.png" class="logo"></image>
        </div>

        <div class="WrapperForMainTitle">
            <h1 class="MainTitle">
                Здесь вы можете оказать разного рода помощь нуждающимся животным, не  прилагая особых  усилий
            </h1>
        </div>

        <div>
            <ul>
                <ul>
                    <li><a href="">Our team</a></li>
                    <li><a href="">History</a></li>
                </ul>
                <li><a href="authorization/authorization.php">Вход</a></li>
                <li><a href="Registration/Registration.php">Регистарция</a></li>
            </ul>
        </div>
    </nav>
</header>

<section>
    <!--            ПОИСКОВАЯ СТРОКА-->
    <div class="d7">
        <form>
            <input type="text" placeholder="Поиск  по  сайту...">
            <button type="submit">
                <image class="SearchLogo" src="assets/search.png"/>
            </button>
        </form>
    </div>

    <!--            МЕНЮ С КНОПКАМИ-->
    <div>
        <div class='Menu'>
            <ul>
                <li><a href="looking.html">Ищут дом</a></li>
                <li><a href="lost.html">Потеряшки</a></li>
                <li><a href="#">Другое</a>
                    <ul>
                        <li><a href="">Поддержка</a></li>
                        <li><a href="">Финансовая помощь</a></li>
                        <li><a href="">Материальная помощь</a></li>
                        <li><a href="">Услуги</a></li>
                    </ul>
                </li>
                <li><a href="#">Доп.Информация</a>
                    <ul>
                        <li><a href="">Стать волонтером</a></li>
                        <li><a href="">Информация о фонах и приютах</a></li>
                        <li><a href="">Как предотвратить пропажу питомца</a></li>
                    </ul>
                  <li><a class="wer" href="Ads/CreateAds.php">Разместить объявление</a>
                </li>

            </ul>
        </div>
    </div>

    <!--            ТАБЛИЦА С ОБЪЯВЛЕНИЯМИ-->



    <div  class="Wrap">

        <!-- СОРТИРОВКА-->
        <div class="WrapForSort">
            <div class="Soft">
                <a class="bth" href="everything.html"> Все </a>
                <a class="bth" href="dog.html"> Собаки </a>
                <a class="bth" href="cat.html"> Кошки </a>
            </div>
        </div>
        <?php
        $connect = mysqli_connect('localhost', 'root',
            'root', 'crud');
        $Ads = mysqli_query ($connect," SELECT * FROM `Ads` ");
        $Ads =mysqli_fetch_all($Ads);
        foreach ($Ads as $ad) {    //запрос для вывода данных
            ?>

            <div class="WrapperCard">
                <div  class="Cards">
                    <div class="card">
                        <img src="./assets/kitr.jpg" alt="Фото животного"
                             style="width:100%">
                        <h1><?= $ad[1] ?></h1>
                        <p><?= $ad[5] ?></p>
                        <p><?= $ad[7] ?></p>
                        <p><?= $ad[6] ?></p>
                        <p class="data"><?= $ad[9] ?></p>
                        <p><button><a href="Ads/fullad.php">Посмотреть объявление</a></button></p>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>
</body>
</html>
