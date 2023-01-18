<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="sign_up.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    <title>Аттракционы Москвы</title>
</head>
<body>
    <header>
        <ul class = "menu-main">
            <li><a href = "index.html">На главную</a></li>
            <li><a href = "about_us.html">О нас</a></li>
            <li><a href = "map.php">Карта</a></li>
            <li><a href = "log_in.php">Авторизация</a></li>
        </ul>
    </header>
    <main>
        <form action="sign_up.php" class="ui-form" method="post">
            <h3>РЕГИСТРАЦИЯ</h3>
            <div class="form-row">
                <input type="text" name="name" required autocomplete="off"><label for="name">Введите имя</label>
            </div>
            <div class="form-row">
                <input type="text" name="email" required autocomplete="off"><label for="email">Введите email</label>
            </div>
            <div class="form-row">
                <input type="password" name="password" required autocomplete="off"><label for="password">Придумайте Пароль</label>
            </div>
            <div class="form-row">
                <input type="password" name="repeat_password" required autocomplete="off"><label for="password">Повторите пароль</label>
            </div>
            <p><input type="submit" value="Зарегистрироваться"></p>
                <?php
                if ($_SESSION['message']){
                    echo '<p class="msg">'.$_SESSION['message'].'</p>';
                }
                unset($_SESSION['message']);
                ?>
        </form>
    </main>
    <footer></footer>
</body>
</html>