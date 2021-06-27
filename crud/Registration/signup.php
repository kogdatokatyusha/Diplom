<?php
session_start();
    require_once '../config/connect.php';

$connect = mysqli_connect('localhost', 'root', 'root', 'crud');

$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
if($password_confirm===$password) {
    $password=md5($password);
    mysqli_query($connect, "INSERT INTO `users`
    (`id`, `login`, `email`, `password`) 
    VALUES (NULL, '$login', '$email', '$password')");
    $_SESSION['message'] = 'Регистрация прошла успешно';
    header('Location: ../authorization/authorization.php');
} else {
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../Registration/Registration.php');
}
?>



<div  class="WrapperForCard">
    <div class="Card">
        <div  class="InCard">
            <img src="./assets/images/dog.png" alt="фото" style="width:100%">
            <h1>Название</h1>
            <p>Описание</p>
            <p>Особенности</p>
            <p >Город</p>
            <p>Пол</p>
            <p>Кошка/Собака</p>
            <p>Контактный номер</p>
            <p class="data">Дата публикации</p>
        </div>
    </div>
</div>











