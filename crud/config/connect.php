<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'crud');

if(!$connect) {
    die('Error connect to database!');
}  //подключение к БД
