<?php

session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        Личный кабинет
    </title>
    <link rel="stylesheet" href="/vin.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@400;700&display=swap"
          rel="stylesheet">
</head>
<body
<form>
    <img src="<?= $_SESSION['user']['login'] ?>" width="100" alt="">
    <a href="#"><?= $_SESSION['user']['email'] ?></a>
</form>

</body>
</html>


