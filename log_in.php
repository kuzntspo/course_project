<?php
session_start();

require_once 'db_connect.php';
$email = $_POST['email'];
$password = md5($_POST['password']);


    $check=mysqli_query($connect, "SELECT name, login, password FROM `users` WHERE `login`='$email' AND `password`='$password'");
    if(mysqli_num_rows($check)>0){
       $user = mysqli_fetch_assoc($check);
       $_SESSION['user'] = ["name"=> $user['name']];
       header('Location: main_page.php');
    }
    else{
        $_SESSION['message'] = 'Пользователь не найден.';
        header('Location: log_in_page.php');
    }
?>
<pre>
    <?php
    print_r($_SESSION['user']);
    ?>
</pre>