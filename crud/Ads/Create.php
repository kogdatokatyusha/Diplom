<?php
require_once '../config/connect.php';
// Запрос на добавление информации в БД

$name = $_POST['name'];
$description = $_POST['description'];
$features = $_POST['features'];
$photo = $_POST['photo'];
$city = $_POST['city'];
$gender = $_POST['gender'];
$type = $_POST['type'];
$phone = $_POST['phone'];

//Запрос  на добавление данных
$connect =  mysqli_connect('localhost', 'root', 'root', 'crud');
mysqli_query($connect, "INSERT INTO `ads` (`id`, `name`, `description`, `features`, `photo`, `city`, `type`, `gender`, `phone`, `publication date`, `id category`)
 VALUES (NULL, '$name', '$description', '$features','$photo', '$city','$type', '$gender', '$phone', NULL, NULL)");
header('Location:  ../index.php');
?>