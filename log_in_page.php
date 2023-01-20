<?php
session_start();
error_reporting(0);
if ($_SESSION['user']){
    header('Location: main_page.php');
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="log_in.css">
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
            <li><a href = "index.php">На главную</a></li>
            <li><a href = "map.php">Карта</a></li>
            <li><a href = "about_us.html">О нас</a></li>
        </ul>
    </header>
    <main>
        <form action="log_in.php" class="ui-form" method="post">
            <h3>АВТОРИЗАЦИЯ</h3>
            <div class="form-row">
                <input type="text" name="email" required autocomplete="off"><label for="email">Email</label>
            </div>
            <div class="form-row">
                <input type="password" name="password" required autocomplete="off"><label for="password">Пароль</label>
            </div>
            <p><input type="submit" value="Войти"></p>
            <div class="sign-up">
                <p class="text">У меня нет аккаунта,<a class="text-sign-up" href = "sign_up_page.php">зарегистрироваться</a></p>
            </div>
            <?php
                if ($_SESSION['message']){
                    echo '<p class="msg">'.$_SESSION['message'].'</p>';
                }
                unset($_SESSION['message']);
                ?>
        </form>
        
    </main>
    <footer class="footer">
        <p>Приложение создано на основе открытых данных города Москвы:</p>
            <a href="https://data.mos.ru/opendata/7709083955-attraktsiony-v-skverah-i-parkah" style="color: azure;">Аттракционы в парках и на площадках, </a></li>
            <a href="https://data.mos.ru/opendata/7709083955-attraktsiony-v-torgovyh-tsentrah-i-kompleksah"style="color: azure;">Аттракционы в торгово-развлекательных комплексах</a></li>
    </footer>
</body>
</html>