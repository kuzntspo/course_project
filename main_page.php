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
            <p class="hello">Здравствуйте, <?=$_SESSION['user']['name']?>
            <li><a href = "index.php">На главную</a></li>
            <li><a href = "about_us.html">О нас</a></li>
            <li><a href = "map.php">Карта</a></li>
            <li><a href="log_out.php">Выход</a></li>
        </ul>
    </header>
    <main>
    <div class="square-block">
        <div class="dropdown">
            <button class="dropbtn">Все аттракционы</button>
            <div class="dropdown-content">
                <a href="kacheli.php">Качели</a>
                <a href="courusel.php">Карусели</a>
                <a href="jump.php">Батуты</a>
                <a href="cinema.php">Кинотеатры и виртульная реальность</a>
                <a href="autodrom.php">Автодромы</a>
                <a href="gorki.php">Горки</a>
                <a href="extreme.php">Экстремальные</a>
                <a href="akva.php">В аквапарках</a>
                <a href="eye.php">Колесо обозрения</a>
                <a href="in_trk.php">В торгово-развлекательных центрах</a>
            </div>
        </div>
        <form class="search" method="post">
            <select class="select" name="adm">
                <option selected>Все административные округа</option>
                <option value="Центральный административный округ">Центральный административный округ</option>
                <option value="Северный административный округ">Северный административный округ</option>
                <option value="Северо-Восточный административный округ">Северо-Восточный административный округ</option>
                <option value="Северо-Восточный административный округ">Северо-Восточный административный округ</option>
                <option value="Восточный административный округ">Восточный административный округ</option>
                <option value="Юго-Восточный административный округ">Юго-Восточный административный округ</option>
                <option value="Южный административный округ">Южный административный округ</option>
                <option value="Юго-Западный административный округ">Юго-Западный административный округ</option>
                <option value="Западный административный округ">Западный административный округ</option>
                <option value="Северо-Западный административный округ">Северо-Западный административный округ</option>
                <option value="Зеленоградский административный округ">Зеленоградский административный округ</option>
            </select>
            <select class="select" name="district">
                <option selected>Все районы</option>
                <!--Центральный административный округ-->
                <option value="район Арбат">Арбат</option>
                <option value="Басманный район">Басманный</option>
                <option value="район Замоскворечье">Замоскворечье</option>
                <option value="Красносельский район">Красносельский</option>
                <option value="Мещанский район">Мещанский</option>
                <option value="Пресненский район">Пресненский</option>
                <option value="Таганский район">Таганский</option>
                <option value="Тверской район">Тверской</option>
                <option value="район Хамовники">Хамовники</option>
                <option value="район Якиманка">Якиманка</option>
                <!--Северный административный округ-->
                <option value="район Аэропорт">Аэропорт</option>
                <option value="район Беговой">Беговой</option>
                <option value="Бескудниковский район">Бескудниковский</option>
                <option value="Войковский район">Войковский</option>
                <option value="район Восточное Дегунино">Восточное Дегунино</option>
                <option value="Головинский район">Головинский</option>
                <option value="Дмитровский район">Дмитровский</option>
                <option value="район Западное Дегунино">Западное Дегунино</option>
                <option value="район Левобережный">Левобережный</option>
                <option value="Молжаниновский район">Молжаниновский</option>
                <option value="Савёловский район">Савёловский</option>
                <option value="район Сокол">Сокол</option>
                <option value="Тимирязевский район">Тимирязевский</option>
                <option value="район Ховрино">Ховрино</option>
                <option value="Хорошёвский район">Хорошёвский</option>
                <!--Северо-Восточный административный округ-->
                <option value="Алексеевский район">Алексеевский</option>
                <option value="Алтуфьевский район">Алтуфьевский</option>
                <option value="Бабушкинский район">Бабушкинский</option>
                <option value="район Бибирево">Бибирево</option>
                <option value="Бутырский район">Бутырский</option>
                <option value="район Лианозово">Лианозово</option>
                <option value="Лосиноостровский район">Лосиноостровский</option>
                <option value="район Марфино">Марфино</option>
                <option value="район Марьина Роща">Марьина</option>
                <option value="Останкинский район">Останкинский</option>
                <option value="район Отрадное">Отрадное</option>
                <option value="район Ростокино">Ростокино</option>
                <option value="район Свиблово">Свиблово</option>
                <option value="район Северный">Северный</option>
                <option value="район Северное Медведково">Северное Медведково</option>
                <option value="район Южное Медведково">Южное Медведково</option>
                <option value="Ярославский район">Ярославский район</option>
                <!--Восточный административный округ-->
                <option value="район Богородское">Богородское</option>
                <option value="район Вешняки">Вешняки</option>
                <option value="район Восточный">Восточный</option>
                <option value="район Восточное Измайлово">Восточное Измайлово</option>
                <option value="район Гольяново">Гольяново</option>
                <option value="район Ивановское">Ивановское</option>
                <option value="район Измайлово">Измайлово</option>
                <option value="район Косино-Ухтомский">Косино-Ухтомский</option>
                <option value="район Метрогородок">Метрогородок</option>
                <option value="район Новогиреево">Новогиреево</option>
                <option value="район Новокосино">Новокосино</option>
                <option value="район Перово">Перово</option>
                <option value="район Преображенское">Преображенское</option>
                <option value="район Северное Измайлово">Северное Измайлово</option>
                <option value="район Соколиная Гора">Соколиная Гора</option>
                <option value="район Сокольники">Сокольники</option>
                <!--Юго-Восточный административный округ-->
                <option value="район Выхино-Жулебино">Выхино-Жулебино</option>
                <option value="район Капотня">Капотня</option>
                <option value="район Кузьминки">Кузьминки</option>
                <option value="район Лефортово">Лефортово</option>
                <option value="район Люблино">Люблино</option>
                <option value="район Марьино">Марьино</option>
                <option value="район Некрасовка">Некрасовка</option>
                <option value="Нижегородский район">Нижегородский</option>
                <option value="район Печатники">Печатники</option>
                <option value="Рязанский район">Рязанский</option>
                <option value="район Текстильщики">Текстильщики</option>
                <option value="Южнопортовый район">Южнопортовый</option>
                <!--Южный административный округ--> 
                <option value="район Бирюлёво Восточное">Бирюлёво Восточное</option>
                <option value="район Бирюлёво Западное">Бирюлёво Западное</option>
                <option value="район Братеево">Братеево</option>
                <option value="Даниловский район">Даниловский</option>
                <option value="Донской район">Донской</option>
                <option value="район Зябликово">Зябликово</option>
                <option value="район Москворечье-Сабурово">Москворечье-Сабурово</option>
                <option value="район Нагатино-Садовники">Нагатино-Садовники</option>
                <option value="район Нагатинский Затон">Нагатинский Затон</option>
                <option value="Нагорный район">Нагорный</option>
                <option value="район Орехово-Борисово Северное">Орехово-Борисово Северное</option>
                <option value="район Орехово-Борисово Южное">Орехово-Борисово Южное</option>
                <option value="район Царицыно">Царицыно</option>
                <option value="район Чертаново Северное">Чертаново Северное</option>
                <option value="район Чертаново Центральное">Чертаново Центральное</option>
                <option value="район Чертаново Южное">Чертаново Южное</option>
                <!--Юго-Западный административный округ-->
                <option value="Академический район">Академический</option>
                <option value="Гагаринский район">Гагаринский</option>
                <option value="район Зюзино">Зюзино</option>
                <option value="район Котловка">Котловка</option>
                <option value="Ломоносовский район">Ломоносовский</option>
                <option value="Обручевский район">Обручевский</option>
                <option value="район Северное Бутово">Северное Бутово</option>
                <option value="район Тёплый Стан">Тёплый Стан</option>
                <option value="район Черёмушки">Черёмушки</option>
                <option value="район Южное Бутово">Южное Бутово</option>
                <option value="район Ясенево">Ясенево</option>
                <!--Западный административный округ-->
                <option value="район Внуково">Внуково</option>
                <option value="район Дорогомилово">Дорогомилово</option>
                <option value="район Крылатское">Крылатское</option>
                <option value="район Кунцево">Кунцево</option>
                <option value="Можайский район">Можайский</option>
                <option value="район Ново-Переделкино">Ново-Переделкино</option>
                <option value="район Очаково-Матвеевское">Очаково-Матвеевское</option>
                <option value="район Проспект Вернадского">Проспект Вернадского</option>
                <option value="район Раменки">Раменки</option>
                <option value="район Солнцево">Солнцево</option>
                <option value="район Филёвский Парк">Филёвский</option>
                <option value="район Фили-Давыдково">Фили-Давыдково</option>
                <!--Северо-Западный административный округ-->  
                <option value="район Куркино">Куркино</option>
                <option value="район Митино">Митино</option>
                <option value="район Покровское-Стрешнево">Покровское-Стрешнево</option>
                <option value="район Северное Тушино">Северное Тушино</option>
                <option value="район Строгино">Строгино</option>
                <option value="район Хорошёво-Мнёвники">Хорошёво-Мнёвники</option>
                <option value="район Щукино">Щукино</option>
                <option value="район Южное Тушино">Южное Тушино</option>
                <!--Зеленоградский административный округ-->  
                <option value="район Матушкино">Матушкино</option>
                <option value="район Савёлки">Савёлки</option>
                <option value="район Старое Крюково">Старое Крюково</option>
                <option value="район Силино">Силино</option>
                <option value="район Крюково">Крюково</option>
            </select>
                <p><input type="submit" class="submit" value="Найти"></p>
        </form>  
    <div class="img">
        <?php
        $adm=$_POST['adm'];
        $district=$_POST['district'];
            include "db_connect.php";
            if(empty($adm)&empty($district)){
                $sql = "SELECT Name,Location,Photo FROM ATTRACTION";
                $result = mysqli_query($connect, $sql);//обращение к бд
            }
            else{
                $sql = "SELECT Name,Location,Photo FROM ATTRACTION WHERE (AdmArea RLIKE '$adm'|| District RLIKE '$district')";
                $result = mysqli_query($connect, $sql);//обращение к бд
            }
    
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
   
</body>
</html>
