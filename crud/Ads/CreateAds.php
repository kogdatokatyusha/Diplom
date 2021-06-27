<?php
require_once '../config/connect.php' //подключение к БД
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Create.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@400;700&display=swap"
          rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
<header>
    <nav role='navigation'>
        <div>
            <image src="/assets/logo.png" class="logo"></image>
        </div>

        <div class="WrapperForMainTitle">
            <h1 class="MainTitle">
                Здесь вы можете оказать разного рода помощь нуждающимся животным, не прилагая особых усилий
            </h1>
        </div>
    </nav>
</header>

<section>
    <div class="creat p">
        <form action="Create.php" method="POST">
            <p class="pStyle"> Заголовок </p>
            <input class="inputStyle" type="text" name="name">
            <p class="pStyle">Описание </p>
            <textarea name="description"></textarea>
            <p class="pStyle">Особенности </p>
            <textarea name="features"></textarea>
            <p class="pStyle">Город </p>
            <input class="inputStyle" type="text" name="city">
            <p class="pStyle">Пол </p
            ><input class="inputStyle" type="text" name="gender">
            <p class="pStyle">Тип животного </p>
            <input class="inputStyle" type="text" name="type">
            <p class="pStyle">Телефон </p>
            <input class="inputStyle" type="text" name="phone">
    </div>
    <div class="creat2">
        <p> ФОТО </p>
        <input type="file" name="photo">
    </div>
    <div class="creat3">
        <button class="war" type="submit" href="/index.php">Разместить объявление</button>

    </div>
</section>
</body>
</html>





