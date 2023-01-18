<?php
session_start();
require_once 'db_connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];

if ($password===$repeat_password){
    $password = md5($password);
    mysqli_query($connect, "INSERT INTO `users`(`name`, `login`, `password`) VALUES ('$name','$email','$password')");
    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: main_page.php');
}
else{
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: sign_up_page.php');
}
?>
