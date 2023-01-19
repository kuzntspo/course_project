<?php
session_start();
if (!$_SESSION['user']){
    header('Location: log_in_page.php');
}
error_reporting(0);
?>
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
            <li><a href = "index.php">На главную</a></li>
            <li><a href = "about_us.html">О нас</a></li>
            <li><a href = "map.php">Карта</a></li>
            <li><a href="log_out.php">Выход</a></li>
        </ul>
    </header>
    <main>
    <div class="square-block">
    <h2>Здравствуйте, <?=$_SESSION['user']['name']?></h2>
    <div class="btn-group">
        <button><a href="main_page.php">Все</a></button>
        <button><a href="kacheli.php">Качели</button>
        <button><a href="courusel.php">Карусели</a></button>
        <button><a href="jump.php">Батуты</a></button>
        <button><a href="autodrom.php">Автодромы</a></button>
        <button><a href="gorki.php">Горки</a></button>
        <button>Экстремальные</button>
        <button><a href="akva.php">В аквапарках</a></button>
        <button><a href="in_trk.php">В торгово-развлекательных центрах</a></button>
    </div>
    <div class = 'img'>
    <?php
        include "db_connect.php";
        $sql = "SELECT Name,Location,Photo FROM `ATTRACTION` WHERE Name RLIKE 'КИНОТЕАТР' || Name RLIKE 'CINEMA'";
        $result = mysqli_query($connect, $sql);//обращение к бд
        if (!$result) die('Error result');
        while ($row_img = mysqli_fetch_assoc($result)) { 
            ?>
            <?php echo '<ul>'.'<li>'.$row_img['Name'].'</li>'.'<li>'.$row_img['Location'].'</li>'.'</ul>';?> 
            <img src="<?php echo $row_img['Photo'];?>" weight='300px' height="300" />
            <?php
            }
            ?>
    </div>
    </div>
    </div>
    </main>
    <footer></footer>
</body>
</html>