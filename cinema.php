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
    <div class="btn-group">
        <button><a href="main_page.php">Все</a></button>
        <button>Карусели</button>
        <button>Качели</button>
        <button>Батуты</button>
        <button>Горки</button>
        <button>Картинг</button>
        <button>Экстимальные</button>
        <button>В торговых центрах</button>
    </div>
    <?php
    include "db_connect.php";
    // Выводим результат из БД
    $sql = mysqli_query($connect, "SELECT Name FROM `ATTRACTIONS` WHERE Name RLIKE 'КИНОТЕАТР' || Name RLIKE 'CINEMA'");
    while ($result = mysqli_fetch_array($sql)) {
        echo '<ul>'.'<li>' .$result['Name'].'</ul>'.'<li>';
    }
    ?>
    </div>
    </div>
    </main>
    <footer></footer>
</body>
</html>