<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main_page.css">
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
    <div class="square-block">
        <form>
            <input type="text" placeholder="Искать здесь...">
            <button type="submit"></button>
        </form>
        <div class = "table_db">
              <table>
              <?php require "table.php"; ?>
               </table>
          </div>
    </div>
    </main>
    <footer></footer>
</body>
</html>
