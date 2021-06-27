<?php
session_start();
?>
<!doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <link rel="stylesheet" href="/vin.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
<!--форма регистрации-->
<div class="form_auth_block">
    <div class="form_auth_block_content">
        <p class="form_auth_block_head_text">Регистрация</p>
<form action="signup.php"method="post">
    <label>Логин</label>
    <input type="login" name="login" placeholder="Введите логин" required >
    <label>Email</label>
    <input type="email" name="email" placeholder="Введите Email" required >
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль" required >
    <label>Подтверждение  пароля</label>
    <input type="password" name="password_confirm" placeholder="Подтвердите пароль" required >
    <button class="form_reg_button" type="submit" name="form_auth_submit">Зарегистрироваться</button>

    <p class="msg none">Lorem</p>
</form>

    </div>

</div>
    <script  src ="authorization/js/jquery-3.4.1.min.js"></script>
    <script  src ="authorization/js/main.js"></script>


    </p>


</body>
</html>