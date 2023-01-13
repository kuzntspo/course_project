<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="log_in.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <title>Аттракционы Москвы</title>
</head>
<body>
    <header>
        <ul class = "menu-main">
            <li><a href = "index.html">На главную</a></li>
            <li><a href = "about_us.html">О нас</a></li>
        </ul>
    </header>
    <main>
        <form action="" class="ui-form">
            <h3>АВТОРИЗАЦИЯ</h3>
            <div class="form-row">
                <input type="text" id="email" required autocomplete="off"><label for="email">Email</label>
            </div>
            <div class="form-row">
                <input type="password" id="password" required autocomplete="off"><label for="password">Пароль</label>
            </div>
            <p><input type="submit" value="Войти"></p>
        </form>
        <div class="sign-up">
            <p class="text">У меня нет аккаунта,<a class="text-sign-up" href = "sign_up.php">зарегистрироваться</a></p>
        </div>
    </main>
    <footer></footer>
</body>
</html>