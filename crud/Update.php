<?php
require_once 'config/connect.php';

$connect = mysqli_connect('localhost', 'root', 'root', 'crud');
$Ad_id =  $_GET['id'];
$Ad = mysqli_query($connect,  "SELECT * FROM 'ads' WHERE 'id'= '$Ad_id'");
$Ad  = mysqli_fetch_assoc($Ad);


?>



<!doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
</head>
<body>
<form action="Ads/Create.php"  method="post" >
    <p> Заголовок </p>
    <input type ="text" name="name" value="<?=$Ad?>">
    <p>Описание </p>
    <textarea name="description"></textarea>
    <p>Особенности </p>
    <textarea name = "features"></textarea>
    <p>Фото </p>
    <input type ="file" name="photo">
    <p>Город </p>
    <input type ="text" name="city">
    <p>Пол </p>
    <input type ="text" name="gender">
    <p>Тип животного </p>
    <input type ="text" name="type">
    <p>Телефон </p>
    <input type ="text" name="phone">
    <p>Дата публикации </p>
    <input type ="date" name="date">

    <button type ="submit">   Изменить   </button>
</form>
</body>
</html>
