<?php
session_start();
require_once '../config/connect.php';
$connect = mysqli_connect('localhost', 'root', 'root', 'crud');

$login = $_POST['login'];
$password = $_POST['password'];

$error_fields =  [];

if($login===''){
    $error_fields[] = 'login';

}
if ($password  === ''){
    $error_fields[] = 'password';

}
if (!empty($error_fields)) {

    $responce =  [
            "status" => false,
        "type" => 1 ,
        "message" => "Проверьте правильность полей",
        "fields" => $error_fields
    ];
    echo json_encode();

    die();
}

$password =  md5($password);

$check_user = mysqli_query($connect, "SELECT * FROM `users`  WHERE
                             'login' ='$login' AND 'password' = '$password'");
if(mysqli_num_rows($check_user) > 0 ) {

    $user=mysqli_fetch_assoc($check_user);
    $_SESSION['user']=  [
        "id"=> $user['id'],
        "login" => $user['login'],
        "email" => $user['email']
    ];

    $responce  = [
            "status" =>  true
            ];

  echo json_encode($responce);
} else {
    $responce  = [
        "status" =>  false,
        "message" => 'Не верный логин или пароль'
    ];

//    $_SESSION['message'] = 'Не верный логин или пароль';
//    header('Location: ../authorization/authorization.php');
    echo json_encode($responce);
}
?>


<!--if(mysqli_num_rows($check_user) > 0 ) {-->
<!--$user = mysqli_fetch_assoc($check_user);-->
<!--$_SESSION['user']=  [-->
<!--"id"=> $user['id'],-->
<!--"login" => $user['login'],-->
<!--"email" => $user['email']-->
<!--];-->
<!--header('Location:  ../index.php');-->
<!--} else {-->
<!--$_SESSION['message'] = 'Не верный логин или пароль';-->
<!--}-->
