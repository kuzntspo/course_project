<?php
require("php\session.php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Транспорт Москвы</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/start_style.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">Транспорт Москвы</a>
                <?php if($session_user):?>
                  <li><a href="#">Вы зашли под аккаунтом <?=$session_user["username"]?></a></li>
                <?php endif;?>
                <?php if($session_user["role"] == "admin"):?>
                  <li><a href="users.php">Все зарегистрированные пользователи</a></li>
                <?php endif;?>
                <li><a href="logout.php" class="text"> Выйти</a></li>
            </div>
        </nav>
        <!-- Header-->
        
        <!-- Features section-->
        <section class="py-5 border-bottom" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                        <h2 class="h4 fw-bolder">Статистика по метро Москвы</h2>
                        <p>Самые загруженные станции метро за последний квартал.</p>
                        <a class="text-decoration-none" href="subway.php">
                            Перейти
                            <i class="bi bi-arrow-right" href="hi.php"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                        <h2 class="h4 fw-bolder">Статистика по транспорту Москвы</h2>
                        <p>Кроме метро, в городе также есть автобусы, электробусы и трамваи. Узнайте количество пассажиров на данных видах транспорта.</p>
                        <a class="text-decoration-none" href="transport.php">
                            Перейти
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                   
                
                    <div class="col-lg-4">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                        <h2 class="h4 fw-bolder">Карта</h2>
                        <p> Карта доступна авторизованным пользователям.</p>
                        <?php if($session_user):?>
                        <a class="text-decoration-none" href="map.php">
                            Перейти
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        <?php endif;?>
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- Pricing section-->
        <section class="bg-light py-5 border-bottom">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Схема метро</h2>
                    
                </div>
                
            </div>
            <div class="mySVG">
<svg version="1.1" id="mosmetro" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" preserveAspectRatio="xMidYMid slice" viewBox="0 0 1624 767.271186440678" width="1300" height="1400"><g id="moving-wrapper" transform="translate(0 383.635593220339)"><g id="scaling-wrapper" transform="translate(520.8671946776493,-383.635593220339) scale(0.35853793758910185)"><g class="manual-marker marker-from"><circle cx="0" cy="0" r="5" fill="#FFFFFF"></circle></g> <g class="manual-marker marker-to"><circle cx="0" cy="0" r="5" fill="#FFFFFF"></circle></g>
  <g class="lines" stroke-linecap="round" stroke-width="8px" fill="none">
    <g class="ln11" stroke="#29B1A6" fill="none" stroke-width="8px">
    <line x1="457.4" y1="862.9" x2="542.1" y2="778.2" class="s237 s238" stroke="#29B1A6" fill="none" stroke-width="8px"></line>
    <line x1="542.1" y1="778.2" x2="582.4" y2="737.9" class="s238 s239" stroke="#29B1A6" fill="none" stroke-width="8px"></line>
    <line x1="457.4" y1="862.9" x2="416.2" y2="904" class="s236 s237" stroke="#29B1A6" fill="none" stroke-width="8px"></line>
    <path d="M416.2 904l-23.1 23.1c-6.3,6.3-5.6,21.2 0.7,27.5l55.3 55.3" class="s235 s236" stroke="#29B1A6" fill="none" stroke-width="8px"></path>
    <path d="M582.4 737.9l61.7-61.7c5.7,-5.7 14.9,-8 23,-8l139.2 0" class="s255 s239" stroke="#29B1A6" fill="none" stroke-width="8px"></path>
    <line x1="354.8" y1="863.5" x2="287.4" y2="863.5" class="s331 s332" stroke="#29B1A6" fill="none" stroke-width="8px"></line>
    <line x1="457.4" y1="863.5" x2="354.5" y2="863.5" class="s237 s331" stroke="#29B1A6" fill="none" stroke-width="8px"></line>
    <line x1="805.8" y1="1631.7" x2="879.2" y2="1631.7" class="s179 s180 uc" stroke="#29B1A6" fill="none" stroke-width="8px" stroke-opacity="0.25"></line>
    <path d="M879.2 1631.7l63.7 0c9,0 17.9,-5.4 24.3,-11.8l28.3-28.3" class="s180 s181 uc" stroke="#29B1A6" fill="none" stroke-width="8px" stroke-opacity="0.25"></path>
    <line x1="738.1" y1="1632.3" x2="805" y2="1632.3" class="s179 s342" stroke="#29B1A6" fill="none" stroke-width="8px"></line>
    <path d="M645.6 1612.2c3.5,3.5 7,7.1 10.6,10.6 10.5,10.5 12.4,9.4 27.4,9.5l54.5 0" class="s342 s341" stroke="#29B1A6" fill="none" stroke-width="8px"></path>
    <path d="M587.7 1554.1c19.3,19.3 38.6,38.7 57.9,58" class="s341 s340" stroke="#29B1A6" fill="none" stroke-width="8px"></path>
    <path d="M488.9 1504c9.1,-0.2 18.2,-0.5 27.4,-0.7 20.4,-0.6 20.9,0.6 35.5,15 12,12 23.9,24 35.9,35.9" class="s340 s339" stroke="#29B1A6" fill="none" stroke-width="8px"></path>
    <path d="M399.1 1472c5.7,5.7 11.4,11.4 17.1,17.1 16.2,16.2 16.9,16.5 39.8,15.9 11,-0.3 22,-0.6 33,-0.9" class="s339 s338" stroke="#29B1A6" fill="none" stroke-width="8px"></path>
    <path d="M290.6 1363.6c36.2,36.1 72.3,72.2 108.5,108.4" class="s338 s337" stroke="#29B1A6" fill="none" stroke-width="8px"></path>
    <path d="M183.9 1230.9c0,20.9 1,27.1 16.2,42.3 30.2,30.1 60.4,60.3 90.5,90.4" class="s337 s343" stroke="#29B1A6" fill="none" stroke-width="8px"></path>
    <path d="M183.9 975.7c0,53.7 0,201.5 0,255.2" class="s343 s344" stroke="#29B1A6" fill="none" stroke-width="8px"></path>
    <path d="M224.5 882.2c-11.7,11.6-23.5,23.2-35.2,34.9-5.1,5-5.5,5.2-5.5,12.3l0.4 44.7" class="s344 s345" stroke="#29B1A6" fill="none" stroke-width="8px"></path>
    <path d="M287.3 863.8c-10.9,-0.1-21.7,-0.2-32.6,-0.2-10.4,-0.1-11.3,-0.6-18.6,6.7l-11.5 11.4" class="s345 s332" stroke="#29B1A6" fill="none" stroke-width="8px"></path>
    </g>
    <g class="ln5" stroke="#7F0000" fill="none" stroke-width="8px">
    <path d="M806.7 736c17.8,-3.9 36.1,-6.2 54.3,-6.7 31.1,-0.8 62.2,3.5 91.9,12.7" class="s83 s82" stroke="#7F0000" fill="none" stroke-width="8px"></path>
    <path d="M662.1 817.5c39,-40.8 89.4,-69.3 144.6,-81.5" class="s84 s83" stroke="#7F0000" fill="none" stroke-width="8px"></path>
    <path d="M587.2 966.2c9.6,-55.9 35.7,-107.7 74.9,-148.6" class="s85 s84" stroke="#7F0000" fill="none" stroke-width="8px"></path>
    <path d="M586.6 1059.9c-2,-12.4-3.2,-25.1-3.5,-37.7-0.5,-18.7 0.9,-37.6 4.1,-56.1" class="s74 s85" stroke="#7F0000" fill="none" stroke-width="8px"></path>
    <path d="M636 1180.6c-25.6,-35.8-42.5,-77.2-49.5,-120.6" class="s75 s74" stroke="#7F0000" fill="none" stroke-width="8px"></path>
    <path d="M710.1 1252.3c-28.8,-19.2-53.9,-43.6-74,-71.7" class="s76 s75" stroke="#7F0000" fill="none" stroke-width="8px"></path>
    <path d="M805.7 1293.3c-34.1,-7.7-66.6,-21.6-95.7,-41" class="s77 s76" stroke="#7F0000" fill="none" stroke-width="8px"></path>
    <path d="M990.5 1272.9c-35.9,16.9-74.9,26.3-114.5,27.3-23.6,0.6-47.2,-1.7-70.2,-6.9" class="s78 s77" stroke="#7F0000" fill="none" stroke-width="8px"></path>
    <path d="M1113.5 1161.4c-29,48.5-71.9,87.3-123,111.5" class="s79 s78" stroke="#7F0000" fill="none" stroke-width="8px"></path>
    <path d="M1153 991.4c0.4,5.3 0.7,10.6 0.9,15.9 1.4,54.1-12.6,107.6-40.4,154.1" class="s80 s79" stroke="#7F0000" fill="none" stroke-width="8px"></path>
    <path d="M1096.5 842.9c32.5,43.1 52.1,94.7 56.5,148.4" class="s81 s80" stroke="#7F0000" fill="none" stroke-width="8px"></path>
    <path d="M952.9 742c57.3,17.7 107.5,53 143.6,100.9" class="s81 s82" stroke="#7F0000" fill="none" stroke-width="8px"></path>
    </g>
    <g class="ln14" stroke="#F76093" fill="none" stroke-width="8px">
    <path d="M923.8 461.3c65.5,7.5 129.2,28.1 186.6,60.6" class="s228 s227" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M814.1 461.1c17.9,-1.9 36,-2.9 54,-2.9 18.6,0 37.2,1.1 55.7,3.2" class="s229 s228" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M733.3 476.9c26.4,-7.5 53.5,-12.9 80.8,-15.9" class="s201 s229" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M646.3 511c27.8,-14 57.1,-25.5 87.1,-34.1" class="s201 s202" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M488.4 637.2c20.9,-25.4 44.5,-48.8 70,-69.5" class="s204 s203" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M419.7 747.7c17.9,-39.6 41.1,-76.9 68.8,-110.5" class="s205 s204" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M378 906.5c1.8,-20.7 5.1,-41.6 9.6,-61.9" class="s208 s207" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M392.8 1077.6c-11.1,-41.5-16.8,-84.4-16.8,-127.4 0,-14.6 0.7,-29.2 1.9,-43.7" class="s209 s208" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M421.4 1156.6c-11.7,-25.4-21.4,-52-28.6,-79.1" class="s231 s209" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M547.3 1323.3c-53.3,-45.8-96.4,-102.8-125.9,-166.7" class="s210 s231" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M647.8 1390.2c-36,-18-69.9,-40.6-100.5,-66.9" class="s211 s210" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M734.2 1423.7c-29.7,-8.4-58.8,-19.7-86.4,-33.5" class="s212 s211" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M885.3 1442c-5.6,0.2-11.5,0.3-17.2,0.3-45.3,0-90.4,-6.2-134,-18.6" class="s213 s212" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M959.5 1433.8c-24.4,4.6-49.4,7.4-74.2,8.2" class="s214 s213" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M1010.3 1421.3c-16.6,5-33.8,9.3-50.8,12.5" class="s215 s214" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M1149 1354.3c-42.4,29.4-89.3,52.1-138.7,67" class="s216 s215" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M1306.6 1173.6c-25.2,49.6-58.8,94.6-99.1,132.9" class="s218 s217" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M1339.5 1091.6c-8.5,28.2-19.6,55.8-32.9,82" class="s219 s218" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M1354 1028c-3.4,21.4-8.3,42.8-14.5,63.6" class="s220 s219" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M1360.1 939c0.1,3.6 0.1,7.5 0.1,11.2 0,26-2.1,52.1-6.2,77.8" class="s221 s220" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M1271.2 668c20.2,28.8 37.3,59.9 50.9,92.3" class="s224 s223" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M1236.7 624.1c12.2,13.8 23.7,28.4 34.3,43.5" class="s230 s224" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M1197.4 584.5c13.8,12.4 27,25.7 39.3,39.6" class="s225 s230" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M1153.9 549.6c15.1,10.8 29.7,22.5 43.5,34.9" class="s226 s225" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M1110.4 521.9c14.9,8.4 29.6,17.8 43.5,27.7" class="s227 s226" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M1355.8 884.3c2.4,18.1 4,36.5 4.3,54.7" class="s222 s221" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M1322.1 760.3c16.5,39.6 27.9,81.5 33.6,124" class="s222 s223" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M1207.5 1306.6c-18.2,17.3-37.8,33.3-58.5,47.7" class="s216 s217" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M558.4 567.8c27.1,-21.9 56.7,-41.1 87.8,-56.8" class="s203 s202" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M387.5 844.5c2.6,-12 5.8,-24 9.3,-35.7" class="s206 s207" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <path d="M396.8 808.8c6.2,-20.8 14,-41.3 22.9,-61.1" class="s205 s206" stroke="#F76093" fill="none" stroke-width="8px"></path>
    <circle cx="868.3" cy="949.9" r="492.1" stroke-width="1.5px" stroke="#FFFFFF" fill="none"></circle>
    </g>
    <g class="ln1" stroke="#CD0506" fill="none" stroke-width="8px">
    <path d="M1269.1 624.1l0.2 12.8c0.1,8.5-6.6,16.2-12.6,22.2l-9 9" class="s1 s2" stroke="#CD0506" fill="none" stroke-width="8px"></path>
    <line x1="1247.6" y1="668.1" x2="1223.1" y2="692.6" class="s2 s3" stroke="#CD0506" fill="none" stroke-width="8px"></line>
    <line x1="1223.1" y1="692.6" x2="1182.5" y2="733.2" class="s3 s4" stroke="#CD0506" fill="none" stroke-width="8px"></line>
    <line x1="1142.9" y1="772.9" x2="1182.5" y2="733.2" class="s4 s5" stroke="#CD0506" fill="none" stroke-width="8px"></line>
    <line x1="1142.9" y1="772.9" x2="1096.5" y2="819.2" class="s5 s6" stroke="#CD0506" fill="none" stroke-width="8px"></line>
    <line x1="1096.5" y1="819.2" x2="1046.7" y2="869" class="s6 s7" stroke="#CD0506" fill="none" stroke-width="8px"></line>
    <line x1="1046.7" y1="869" x2="1010.8" y2="904.9" class="s7 s8" stroke="#CD0506" fill="none" stroke-width="8px"></line>
    <line x1="1010.8" y1="904.9" x2="955.5" y2="960.2" class="s8 s9" stroke="#CD0506" fill="none" stroke-width="8px"></line>
    <line x1="955.5" y1="960.2" x2="880" y2="1035.7" class="s9 s10" stroke="#CD0506" fill="none" stroke-width="8px"></line>
    <line x1="880" y1="1035.8" x2="784.4" y2="1131.4" class="s10 s11" stroke="#CD0506" fill="none" stroke-width="8px"></line>
    <path d="M784.4 1131.4l-31.3 31.3c-4.8,4.8-11.7,8.5-18.5,8.5l-15.2 0" class="s11 s12" stroke="#CD0506" fill="none" stroke-width="8px"></path>
    <path d="M719.4 1171.1l-38.7 0c-7.4,0-15.5,3-20.7,8.3l-23.9 23.9" class="s12 s13" stroke="#CD0506" fill="none" stroke-width="8px"></path>
    <path d="M547.2 1292.1l-22.7 22.7c-5,5-8.6,12.2-8.6,19.3l0 44.6" class="s15 s16" stroke="#CD0506" fill="none" stroke-width="8px"></path>
    <line x1="515.9" y1="1378.6" x2="515.9" y2="1468.3" class="s16 s17" stroke="#CD0506" fill="none" stroke-width="8px"></line>
    <line x1="515.9" y1="1468.3" x2="515.9" y2="1531" class="s17 s18" stroke="#CD0506" fill="none" stroke-width="8px"></line>
    <line x1="515.9" y1="1531" x2="515.9" y2="1592.6" class="s18 s19" stroke="#CD0506" fill="none" stroke-width="8px"></line>
    <line x1="515.9" y1="1592.6" x2="515.9" y2="1643" class="s19 s196" stroke="#CD0506" fill="none" stroke-width="8px"></line>
    <line x1="515.9" y1="1643" x2="515.9" y2="1693" class="s196 s199" stroke="#CD0506" fill="none" stroke-width="8px"></line>
    <line x1="515.9" y1="1693" x2="515.9" y2="1742.9" class="s199 s200" stroke="#CD0506" fill="none" stroke-width="8px"></line>
    <line x1="589.2" y1="1250.1" x2="636.1" y2="1203.3" class="s13 s14" stroke="#CD0506" fill="none" stroke-width="8px"></line>
    <line x1="589.2" y1="1250.1" x2="547.2" y2="1292.1" class="s14 s15" stroke="#CD0506" fill="none" stroke-width="8px"></line>
    <line x1="515.9" y1="1742.9" x2="515.9" y2="1807.9" class="s260 s200" stroke="#CD0506" fill="none" stroke-width="8px"></line>
    <line x1="515.9" y1="1807.9" x2="515.9" y2="1858.3" class="s261 s260" stroke="#CD0506" fill="none" stroke-width="8px"></line>
    <line x1="515.9" y1="1858.3" x2="515.9" y2="1908.7" class="s262 s261" stroke="#CD0506" fill="none" stroke-width="8px"></line>
    <line x1="515.9" y1="1967.6" x2="515.9" y2="1908.7" class="s262 s263" stroke="#CD0506" fill="none" stroke-width="8px"></line>
    </g>
    <g class="ln2" stroke="#0A6F20" fill="none" stroke-width="8px">
    <line x1="517.3" y1="418.5" x2="517.3" y2="484.5" class="s20 s21" stroke="#0A6F20" fill="none" stroke-width="8px"></line>
    <line x1="517.3" y1="484.5" x2="517.3" y2="639.5" class="s21 s22" stroke="#0A6F20" fill="none" stroke-width="8px"></line>
    <line x1="517.3" y1="639.5" x2="517.3" y2="678.5" class="s22 s23" stroke="#0A6F20" fill="none" stroke-width="8px"></line>
    <path d="M517.3 678.5l0 5.7c0,6.5 2.3,13.7 6.9,18.3l20.2 20.2" class="s23 s24" stroke="#0A6F20" fill="none" stroke-width="8px"></path>
    <line x1="544.5" y1="722.7" x2="582.4" y2="760.6" class="s24 s25" stroke="#0A6F20" fill="none" stroke-width="8px"></line>
    <line x1="582.4" y1="760.6" x2="639.4" y2="817.6" class="s25 s26" stroke="#0A6F20" fill="none" stroke-width="8px"></line>
    <line x1="639.4" y1="817.6" x2="713.4" y2="891.6" class="s26 s27" stroke="#0A6F20" fill="none" stroke-width="8px"></line>
    <line x1="713.4" y1="891.6" x2="795.5" y2="973.7" class="s27 s28" stroke="#0A6F20" fill="none" stroke-width="8px"></line>
    <line x1="795.5" y1="973.7" x2="880" y2="1058.2" class="s28 s29" stroke="#0A6F20" fill="none" stroke-width="8px"></line>
    <path d="M880 1058.2l88.1 88.1c4.8,4.7 6.7,12.3 6.7,19l0 31.2" class="s29 s30" stroke="#0A6F20" fill="none" stroke-width="8px"></path>
    <line x1="974.8" y1="1196.5" x2="974.8" y2="1288.6" class="s30 s31" stroke="#0A6F20" fill="none" stroke-width="8px"></line>
    <line x1="974.8" y1="1288.6" x2="974.8" y2="1385.7" class="s31 s32" stroke="#0A6F20" fill="none" stroke-width="8px"></line>
    <line x1="974.8" y1="1385.7" x2="974.8" y2="1465.7" class="s32 s198 uc" stroke="#0A6F20" fill="none" stroke-width="8px" stroke-opacity="0.25"></line>
    <line x1="974.8" y1="1504.7" x2="974.8" y2="1465.7" class="s198 s33 uc" stroke="#0A6F20" fill="none" stroke-width="8px" stroke-opacity="0.25"></line>
    <line x1="974.8" y1="1504.7" x2="974.8" y2="1583.2" class="s33 s34 uc" stroke="#0A6F20" fill="none" stroke-width="8px" stroke-opacity="0.25"></line>
    <path d="M974.8 1583.2l0 14c0,5.1 4.2,12.9 7.8,16.5l19.3 19.3" class="s34 s35 uc" stroke="#0A6F20" fill="none" stroke-width="8px" stroke-opacity="0.25"></path>
    <line x1="1001.8" y1="1633.1" x2="1050.3" y2="1681.5" class="s35 s36 uc" stroke="#0A6F20" fill="none" stroke-width="8px" stroke-opacity="0.25"></line>
    <line x1="1050.3" y1="1681.5" x2="1105.7" y2="1737" class="s36 s37 uc" stroke="#0A6F20" fill="none" stroke-width="8px" stroke-opacity="0.25"></line>
    <line x1="1105.7" y1="1737" x2="1158.8" y2="1790" class="s37 s38" stroke="#0A6F20" fill="none" stroke-width="8px"></line>
    <line x1="1201.4" y1="1832.6" x2="1158.8" y2="1790" class="s38 s39" stroke="#0A6F20" fill="none" stroke-width="8px"></line>
    <path d="M1201.4 1832.6l28.6 28.6c4.7,4.7 13.3,8.6 19.9,8.6l69.2 0" class="s39 s187" stroke="#0A6F20" fill="none" stroke-width="8px"></path>
    <line x1="517.3" y1="366.8" x2="517.3" y2="418.5" class="s254 s20" stroke="#0A6F20" fill="none" stroke-width="8px"></line>
    <line x1="517.3" y1="366.8" x2="517.3" y2="284" class="s254 s243" stroke="#0A6F20" fill="none" stroke-width="8px"></line>
    </g>
    <g class="ln3" stroke="#072889" fill="none" stroke-width="8px">
    <line x1="208.3" y1="343.3" x2="208.3" y2="419.4" class="s188 s40" stroke="#072889" fill="none" stroke-width="8px"></line>
    <line x1="208.3" y1="419.4" x2="208.3" y2="501.5" class="s40 s41" stroke="#072889" fill="none" stroke-width="8px"></line>
    <line x1="208.3" y1="501.5" x2="208.3" y2="575.4" class="s41 s42" stroke="#072889" fill="none" stroke-width="8px"></line>
    <line x1="208.3" y1="575.4" x2="208.3" y2="649.8" class="s42 s43" stroke="#072889" fill="none" stroke-width="8px"></line>
    <line x1="208.3" y1="649.8" x2="208.3" y2="724.5" class="s43 s44" stroke="#072889" fill="none" stroke-width="8px"></line>
    <line x1="208.3" y1="724.5" x2="208.3" y2="799.3" class="s44 s45" stroke="#072889" fill="none" stroke-width="8px"></line>
    <line x1="208.3" y1="799.4" x2="208.3" y2="924.3" class="s45 s46" stroke="#072889" fill="none" stroke-width="8px"></line>
    <path d="M208.3 924.2l0 187.5c0,10.9 4.2,19.5 7.5,22.9l22.5 22.5" class="s46 s47" stroke="#072889" fill="none" stroke-width="8px"></path>
    <path d="M378.5 1199.7l-85.9 0c-6,0-14.8,-3.1-18.7,-7l-35.6-35.6" class="s47 s48" stroke="#072889" fill="none" stroke-width="8px"></path>
    <path d="M378.5 1199.7l31.9 0c7.4,0 13.5,-4.1 17,-7.6l103.3-103.3c3,-3 10.5,-8.2 16.8,-8.2l5.4 0" class="s48 s49" stroke="#072889" fill="none" stroke-width="8px"></path>
    <line x1="554.2" y1="1080.5" x2="654.5" y2="1080.5" class="s49 s50" stroke="#072889" fill="none" stroke-width="8px"></line>
    <line x1="654.5" y1="1080.5" x2="785" y2="1080.5" class="s50 s51" stroke="#072889" fill="none" stroke-width="8px"></line>
    <line x1="785" y1="1080.5" x2="880" y2="1080.5" class="s51 s52" stroke="#072889" fill="none" stroke-width="8px"></line>
    <path d="M1137.7 976.6l-89.9 89.9c-6.3,6.3-14.6,14-24.6,14l-143.3-0" class="s52 s53" stroke="#072889" fill="none" stroke-width="8px"></path>
    <line x1="1137.7" y1="976.6" x2="1193.3" y2="921.1" class="s53 s54" stroke="#072889" fill="none" stroke-width="8px"></line>
    <line x1="1193.3" y1="921.1" x2="1263.5" y2="850.9" class="s54 s55" stroke="#072889" fill="none" stroke-width="8px"></line>
    <line x1="1263.5" y1="850.9" x2="1306.4" y2="807.9" class="s55 s56" stroke="#072889" fill="none" stroke-width="8px"></line>
    <line x1="1354.1" y1="760.3" x2="1406" y2="708.4" class="s57 s58" stroke="#072889" fill="none" stroke-width="8px"></line>
    <line x1="1306.4" y1="807.9" x2="1354.1" y2="760.3" class="s56 s57" stroke="#072889" fill="none" stroke-width="8px"></line>
    <path d="M1406 708.4l9.1-9.1c3.7,-3.7 5.7,-11.3 5.7,-16.8l0-5.5" class="s58 s59" stroke="#072889" fill="none" stroke-width="8px"></path>
    <line x1="1420.8" y1="677.1" x2="1420.8" y2="598.5" class="s59 s60" stroke="#072889" fill="none" stroke-width="8px"></line>
    </g>
    <g class="ln4" stroke="#069CD3" fill="none" stroke-width="8px">
    <line x1="243.2" y1="957.2" x2="242.8" y2="1016" class="s61 s62" stroke="#069CD3" fill="none" stroke-width="8px"></line>
    <path d="M242.8 1015.5l0 24.7c0,7.3 3.1,15.2 8.3,20.4" class="s62 s63" stroke="#069CD3" fill="none" stroke-width="8px"></path>
    <line x1="250.8" y1="1060.2" x2="280.3" y2="1089.8" class="s63 s64" stroke="#069CD3" fill="none" stroke-width="8px"></line>
    <line x1="280.3" y1="1089.8" x2="324.9" y2="1134.3" class="s64 s65" stroke="#069CD3" fill="none" stroke-width="8px"></line>
    <path d="M324.9 1134.3l2.5 2.5c2.8,2.8 11.3,3.7 15.2,3.7l62.8 0" class="s65 s66" stroke="#069CD3" fill="none" stroke-width="8px"></path>
    <path d="M405.4 1140.6l6.9 0c3.5,0 10.4,-2.1 12.9,-4.6l6.5-6.5" class="s67 s66" stroke="#069CD3" fill="none" stroke-width="8px"></path>
    <path d="M431.6 1129.5l75.7-75.7c7.1,-7.1 16.8,-13.6 26.9,-13.6l17.7-0" class="s67 s70" stroke="#069CD3" fill="none" stroke-width="8px"></path>
    <line x1="551.9" y1="1040.2" x2="654.7" y2="1040.2" class="s70 s71" stroke="#069CD3" fill="none" stroke-width="8px"></line>
    <path d="M654.7 1040.2l37.1 0c5.5,0 13.1,2.2 17,6.1l6.5 6.5" class="s71 s72" stroke="#069CD3" fill="none" stroke-width="8px"></path>
    <line x1="715.4" y1="1052.8" x2="769.5" y2="1107" class="s72 s73" stroke="#069CD3" fill="none" stroke-width="8px"></line>
    <line x1="475" y1="1040.2" x2="551.9" y2="1040.2" class="s69 s70" stroke="#069CD3" fill="none" stroke-width="8px"></line>
    <path d="M475 1040.2l-8.5-0c-8.6,-0-17.4,4.3-23.5,10.4l-27 27" class="s68 s69" stroke="#069CD3" fill="none" stroke-width="8px"></path>
    </g>
    <g class="ln8" stroke="#FFDD03" fill="none" stroke-width="8px">
    <line x1="1468.8" y1="1016.7" x2="1512.3" y2="1060.2" class="s129 s130" stroke="#FFDD03" fill="none" stroke-width="8px"></line>
    <line x1="1438.5" y1="986.4" x2="1468.8" y2="1016.7" class="s130 s131" stroke="#FFDD03" fill="none" stroke-width="8px"></line>
    <path d="M1382.3 961.2l19.2 0c8,0 16.2,4.4 21.9,10l15.2 15.2" class="s131 s132" stroke="#FFDD03" fill="none" stroke-width="8px"></path>
    <path d="M1382.3 961.2l-16.2 0c-7.6,0-16.3,1.5-21.7,6.8l-24.9 24.9" class="s132 s133" stroke="#FFDD03" fill="none" stroke-width="8px"></path>
    <line x1="1319.4" y1="993" x2="1191.3" y2="1121.1" class="s133 s134" stroke="#FFDD03" fill="none" stroke-width="8px"></line>
    <line x1="1191.3" y1="1121.1" x2="1123.8" y2="1188.6" class="s134 s135" stroke="#FFDD03" fill="none" stroke-width="8px"></line>
    <path d="M1123.6 1188.8l-13.6 13.6c-4.3,4.3-11.4,5.3-17.5,5.3l-144.1 0" class="s135 s136" stroke="#FFDD03" fill="none" stroke-width="8px"></path>
    <path d="M445.3 1029.8c-4.1,1.3-18.3,6.5-23.5,8.6-25.2,10.2-58.9,31.3-59.3,77.7l0.2 99.2" class="s193 s194" stroke="#FFDD03" fill="none" stroke-width="8px"></path>
    <line x1="362.8" y1="1215.4" x2="362.8" y2="1290.9" class="s194 s240" stroke="#FFDD03" fill="none" stroke-width="8px"></line>
    <line x1="362.8" y1="1290.9" x2="362.8" y2="1347.9" class="s240 s241" stroke="#FFDD03" fill="none" stroke-width="8px"></line>
    <line x1="362.8" y1="1347.9" x2="362.8" y2="1418.7" class="s241 s242" stroke="#FFDD03" fill="none" stroke-width="8px"></line>
    <line x1="362.8" y1="1471.5" x2="362.8" y2="1418.7" class="s242 s247" stroke="#FFDD03" fill="none" stroke-width="8px"></line>
    <line x1="362.8" y1="1471.5" x2="362.8" y2="1545.2" class="s248 s247" stroke="#FFDD03" fill="none" stroke-width="8px"></line>
    <line x1="362.8" y1="1601.5" x2="362.8" y2="1545.2" class="s249 s248" stroke="#FFDD03" fill="none" stroke-width="8px"></line>
    <line x1="362.8" y1="1601.5" x2="362.8" y2="1657.9" class="s249 s250" stroke="#FFDD03" fill="none" stroke-width="8px"></line>
    <line x1="362.8" y1="1714.3" x2="362.8" y2="1657.9" class="s250 s251" stroke="#FFDD03" fill="none" stroke-width="8px"></line>
    <line x1="362.8" y1="1714.3" x2="362.8" y2="1784.3" class="s251 s252" stroke="#FFDD03" fill="none" stroke-width="8px"></line>
    <line x1="362.8" y1="1862.4" x2="362.8" y2="1784.3" class="s253 s252" stroke="#FFDD03" fill="none" stroke-width="8px"></line>
    </g>
    <g class="ln6" stroke="#FF7F00" fill="none" stroke-width="8px">
    <line x1="1096.2" y1="394" x2="1096.2" y2="341.3" class="s108 s109" stroke="#FF7F00" fill="none" stroke-width="8px"></line>
    <line x1="1096.2" y1="446.6" x2="1096.2" y2="394" class="s107 s108" stroke="#FF7F00" fill="none" stroke-width="8px"></line>
    <line x1="1096.2" y1="490" x2="1096.2" y2="446.6" class="s106 s107" stroke="#FF7F00" fill="none" stroke-width="8px"></line>
    <line x1="1096.2" y1="557.4" x2="1096.2" y2="490" class="s105 s106" stroke="#FF7F00" fill="none" stroke-width="8px"></line>
    <line x1="1096.2" y1="604.2" x2="1096.2" y2="557.4" class="s104 s105" stroke="#FF7F00" fill="none" stroke-width="8px"></line>
    <path d="M953 764.4l-6.8 6.8c-5,5-9.3,11.7-9.3,18.5l0 19.3" class="s101 s102" stroke="#FF7F00" fill="none" stroke-width="8px"></path>
    <path d="M936.9 808.9l0 30.8c0,8.2 4.7,14.7 8.5,18.4l40.1 40.1" class="s100 s101" stroke="#FF7F00" fill="none" stroke-width="8px"></path>
    <path d="M985.5 898.2l9.3 9.3c3,3 6.7,8.6 6.7,15.8l0 137" class="s99 s100" stroke="#FF7F00" fill="none" stroke-width="8px"></path>
    <path d="M1001.5 1060.2l0 60c0,9.5-4.6,18.3-9,22.7l-44 44" class="s98 s99" stroke="#FF7F00" fill="none" stroke-width="8px"></path>
    <path d="M948.4 1186.9l-32.9 32.9c-5.3,5.3-12.6,10.2-20.1,10.2l-128.6 0c-7.7,0-15.6,3.9-21.1,9.4l-35.8 35.8" class="s97 s98" stroke="#FF7F00" fill="none" stroke-width="8px"></path>
    <path d="M710.1 1275.1l-33.5 33.5c-4.1,4.1-7.8,9.9-7.8,15.8l0 11.5" class="s96 s97" stroke="#FF7F00" fill="none" stroke-width="8px"></path>
    <line x1="668.8" y1="1335.8" x2="668.8" y2="1382.1" class="s95 s96" stroke="#FF7F00" fill="none" stroke-width="8px"></line>
    <line x1="668.8" y1="1382.1" x2="668.8" y2="1457.3" class="s94 s95" stroke="#FF7F00" fill="none" stroke-width="8px"></line>
    <line x1="668.8" y1="1457.3" x2="668.8" y2="1501.5" class="s93 s94" stroke="#FF7F00" fill="none" stroke-width="8px"></line>
    <line x1="668.8" y1="1501.5" x2="668.8" y2="1546" class="s92 s93" stroke="#FF7F00" fill="none" stroke-width="8px"></line>
    <line x1="668.8" y1="1546" x2="668.8" y2="1594.3" class="s91 s92" stroke="#FF7F00" fill="none" stroke-width="8px"></line>
    <line x1="668.8" y1="1594.3" x2="668.8" y2="1654.9" class="s90 s91" stroke="#FF7F00" fill="none" stroke-width="8px"></line>
    <line x1="668.8" y1="1654.9" x2="668.8" y2="1699.4" class="s89 s90" stroke="#FF7F00" fill="none" stroke-width="8px"></line>
    <line x1="668.8" y1="1699.4" x2="668.8" y2="1743.6" class="s88 s89" stroke="#FF7F00" fill="none" stroke-width="8px"></line>
    <line x1="668.8" y1="1743.6" x2="668.8" y2="1787.7" class="s87 s88" stroke="#FF7F00" fill="none" stroke-width="8px"></line>
    <path d="M668.8 1787.7l0 32.8c0,11.5 4.9,16.7 7.6,19.7l7 7.7" class="s86 s87" stroke="#FF7F00" fill="none" stroke-width="8px"></path>
    <path d="M953 764.4l133.9-133.9c6,-6 9.3,-12.4 9.3,-18.7l0-7.7" class="s102 s104" stroke="#FF7F00" fill="none" stroke-width="8px"></path>
    </g>
    <g class="ln7" stroke="#92007B" fill="none" stroke-width="8px">
    <line x1="362.8" y1="343.7" x2="362.8" y2="411.4" class="s128 s127" stroke="#92007B" fill="none" stroke-width="8px"></line>
    <line x1="362.8" y1="411.4" x2="362.8" y2="508.4" class="s127 s126" stroke="#92007B" fill="none" stroke-width="8px"></line>
    <line x1="362.8" y1="508.4" x2="362.8" y2="556.5" class="s126 s195" stroke="#92007B" fill="none" stroke-width="8px"></line>
    <line x1="362.8" y1="556.5" x2="362.8" y2="638.4" class="s195 s125" stroke="#92007B" fill="none" stroke-width="8px"></line>
    <path d="M362.8 638.4l0 90.9c0,5.1 2.4,12.2 6,15.8l2.7 2.7" class="s125 s124" stroke="#92007B" fill="none" stroke-width="8px"></path>
    <line x1="371.4" y1="747.7" x2="457.4" y2="833.7" class="s124 s123" stroke="#92007B" fill="none" stroke-width="8px"></line>
    <line x1="457.4" y1="833.7" x2="536.2" y2="912.5" class="s123 s122" stroke="#92007B" fill="none" stroke-width="8px"></line>
    <line x1="536.2" y1="912.5" x2="560.1" y2="936.4" class="s122 s121" stroke="#92007B" fill="none" stroke-width="8px"></line>
    <path d="M560.1 936.4l6.1 6.1c5.7,5.7 14.5,8.7 22.6,8.7l15 0" class="s121 s120" stroke="#92007B" fill="none" stroke-width="8px"></path>
    <line x1="603.8" y1="951.1" x2="808.6" y2="951.1" class="s120 s119" stroke="#92007B" fill="none" stroke-width="8px"></line>
    <path d="M808.6 951.1l101.9-0c8,0 16.6,3.1 22.2,8.8l22.9 22.9" class="s119 s118" stroke="#92007B" fill="none" stroke-width="8px"></path>
    <line x1="955.5" y1="982.7" x2="1016.9" y2="1044.2" class="s118 s117" stroke="#92007B" fill="none" stroke-width="8px"></line>
    <line x1="1016.9" y1="1044.2" x2="1134.7" y2="1162" class="s117 s116" stroke="#92007B" fill="none" stroke-width="8px"></line>
    <line x1="1134.7" y1="1162" x2="1191" y2="1218.3" class="s116 s115" stroke="#92007B" fill="none" stroke-width="8px"></line>
    <line x1="1191" y1="1218.3" x2="1228" y2="1255.3" class="s115 s114" stroke="#92007B" fill="none" stroke-width="8px"></line>
    <line x1="1228" y1="1255.3" x2="1322.3" y2="1349.5" class="s114 s113" stroke="#92007B" fill="none" stroke-width="8px"></line>
    <line x1="1322.3" y1="1349.5" x2="1381.6" y2="1408.9" class="s113 s112" stroke="#92007B" fill="none" stroke-width="8px"></line>
    <line x1="1381.6" y1="1408.9" x2="1431.8" y2="1459.1" class="s112 s111" stroke="#92007B" fill="none" stroke-width="8px"></line>
    <path d="M1431.8 1459.1l4.5 4.4c4.4,4.2 6.8,10.9 6.8,17l0 5.9" class="s111 s110" stroke="#92007B" fill="none" stroke-width="8px"></path>
    <line x1="1443.2" y1="1486.3" x2="1443" y2="1536.5" class="s110 s190" stroke="#92007B" fill="none" stroke-width="8px"></line>
    <line x1="1443.1" y1="1601.7" x2="1443" y2="1536.5" class="s189 s190" stroke="#92007B" fill="none" stroke-width="8px"></line>
    <line x1="1443.1" y1="1601.7" x2="1443.1" y2="1652.9" class="s189 s197" stroke="#92007B" fill="none" stroke-width="8px"></line>
    </g>
    <g class="ln9" stroke="#A2A5B4" fill="none" stroke-width="8px">
    <line x1="942.2" y1="283.4" x2="942.2" y2="340" class="s161 s160" stroke="#A2A5B4" fill="none" stroke-width="8px"></line>
    <line x1="942.2" y1="340" x2="942.2" y2="396.5" class="s160 s159" stroke="#A2A5B4" fill="none" stroke-width="8px"></line>
    <path d="M942.2 396.5l0 7.6c0,6-3.9,13-8.2,17.2l-19.7 19.7" class="s159 s158" stroke="#A2A5B4" fill="none" stroke-width="8px"></path>
    <line x1="914.4" y1="440.9" x2="847" y2="508.4" class="s158 s157" stroke="#A2A5B4" fill="none" stroke-width="8px"></line>
    <path d="M847 508.4l-17.6 17.6c-4.1,4.1-7.8,9.9-7.8,15.7l0 7.3" class="s157 s156" stroke="#A2A5B4" fill="none" stroke-width="8px"></path>
    <line x1="821.7" y1="548.9" x2="821.7" y2="586.2" class="s156 s155" stroke="#A2A5B4" fill="none" stroke-width="8px"></line>
    <line x1="821.7" y1="586.2" x2="821.7" y2="682.1" class="s155 s154" stroke="#A2A5B4" fill="none" stroke-width="8px"></line>
    <line x1="821.7" y1="682.1" x2="821.7" y2="751" class="s154 s153" stroke="#A2A5B4" fill="none" stroke-width="8px"></line>
    <line x1="821.7" y1="751" x2="821.7" y2="814.3" class="s153 s152" stroke="#A2A5B4" fill="none" stroke-width="8px"></line>
    <line x1="821.7" y1="814.3" x2="821.7" y2="973.7" class="s152 s151" stroke="#A2A5B4" fill="none" stroke-width="8px"></line>
    <path d="M821.7 973.7l0 7.9c0,6.7-3.1,13.8-7.8,18.5l-66.3 66.3c-5,5-7.7,12.6-7.7,19.7l0 19.6" class="s151 s150" stroke="#A2A5B4" fill="none" stroke-width="8px"></path>
    <path d="M739.8 1105.4l0 21.4c0,6.7 3.6,13.5 8.3,18.3l63.6 63.6c5.3,5.3 9.9,12.7 9.9,20.1l0 28.2" class="s150 s149" stroke="#A2A5B4" fill="none" stroke-width="8px"></path>
    <line x1="821.7" y1="1257.1" x2="821.7" y2="1309.2" class="s149 s148" stroke="#A2A5B4" fill="none" stroke-width="8px"></line>
    <line x1="821.7" y1="1309.2" x2="821.7" y2="1364.1" class="s148 s147" stroke="#A2A5B4" fill="none" stroke-width="8px"></line>
    <line x1="821.7" y1="1364.1" x2="821.7" y2="1468.6" class="s147 s146" stroke="#A2A5B4" fill="none" stroke-width="8px"></line>
    <line x1="821.7" y1="1468.6" x2="821.7" y2="1513.8" class="s146 s145" stroke="#A2A5B4" fill="none" stroke-width="8px"></line>
    <line x1="821.7" y1="1513.8" x2="821.7" y2="1554.1" class="s145 s144" stroke="#A2A5B4" fill="none" stroke-width="8px"></line>
    <line x1="821.7" y1="1554.1" x2="821.7" y2="1650.4" class="s144 s143" stroke="#A2A5B4" fill="none" stroke-width="8px"></line>
    <line x1="821.7" y1="1650.4" x2="821.7" y2="1700.7" class="s143 s142" stroke="#A2A5B4" fill="none" stroke-width="8px"></line>
    <line x1="821.7" y1="1700.7" x2="821.7" y2="1742" class="s142 s141" stroke="#A2A5B4" fill="none" stroke-width="8px"></line>
    <line x1="821.7" y1="1742" x2="821.7" y2="1782.9" class="s141 s140" stroke="#A2A5B4" fill="none" stroke-width="8px"></line>
    <line x1="821.7" y1="1782.9" x2="821.7" y2="1824.2" class="s140 s139" stroke="#A2A5B4" fill="none" stroke-width="8px"></line>
    <line x1="821.7" y1="1824.2" x2="821.7" y2="1887.7" class="s139 s138" stroke="#A2A5B4" fill="none" stroke-width="8px"></line>
    <line x1="821.7" y1="1887.7" x2="821.7" y2="1954.9" class="s138 s137" stroke="#A2A5B4" fill="none" stroke-width="8px"></line>
    </g>
    <g class="ln10" stroke="#8CCE3A" fill="none" stroke-width="8px">
    <line x1="859.1" y1="543.5" x2="899" y2="583.3" class="s233 s232" stroke="#8CCE3A" fill="none" stroke-width="8px"></line>
    <path d="M899 583.3l4.2 4.2c4.7,4.7 7.3,12.9 7.3,19.4l0 37.9" class="s232 s178" stroke="#8CCE3A" fill="none" stroke-width="8px"></path>
    <path d="M910.4 644.8l0 17.7c0,7.2-3.1,14.9-8.2,20l-7.9 7.9" class="s177 s178" stroke="#8CCE3A" fill="none" stroke-width="8px"></path>
    <path d="M894.4 690.4l-39.1 39.1c-7,7-11.7,17.4-11.6,27.2l0.5 57.5" class="s177 s176" stroke="#8CCE3A" fill="none" stroke-width="8px"></path>
    <path d="M844.1 814.3l0 24c0,9.9 10.4,19.8 20.3,19.8l92 0c11.6,0 25.6,0.2 33.8,8.4l13.6 13.6" class="s176 s175" stroke="#8CCE3A" fill="none" stroke-width="8px"></path>
    <line x1="1003.9" y1="880.1" x2="1126.7" y2="1003" class="s175 s174" stroke="#8CCE3A" fill="none" stroke-width="8px"></line>
    <path d="M1126.7 1003l39.2 39.2c6.1,6.1 9.7,15.3 9.7,23.8l0 39.3" class="s174 s173" stroke="#8CCE3A" fill="none" stroke-width="8px"></path>
    <line x1="1175.6" y1="1105.3" x2="1175.6" y2="1233.7" class="s173 s172" stroke="#8CCE3A" fill="none" stroke-width="8px"></line>
    <line x1="1175.6" y1="1299.4" x2="1175.6" y2="1233.7" class="s172 s171" stroke="#8CCE3A" fill="none" stroke-width="8px"></line>
    <line x1="1175.6" y1="1299.4" x2="1175.6" y2="1383.8" class="s171 s170" stroke="#8CCE3A" fill="none" stroke-width="8px"></line>
    <line x1="1176" y1="1384.8" x2="1231.2" y2="1441" class="s170 s169" stroke="#8CCE3A" fill="none" stroke-width="8px"></line>
    <path d="M1231.2 1441l25.9 25.9c5.4,5.4 10.7,12.5 10.7,20l0 7" class="s169 s168" stroke="#8CCE3A" fill="none" stroke-width="8px"></path>
    <line x1="1267.8" y1="1493.9" x2="1267.8" y2="1540.9" class="s168 s167" stroke="#8CCE3A" fill="none" stroke-width="8px"></line>
    <line x1="1267.8" y1="1540.9" x2="1267.8" y2="1587.7" class="s167 s166" stroke="#8CCE3A" fill="none" stroke-width="8px"></line>
    <line x1="1267.8" y1="1587.7" x2="1267.8" y2="1634.8" class="s166 s165" stroke="#8CCE3A" fill="none" stroke-width="8px"></line>
    <line x1="1267.8" y1="1634.8" x2="1267.8" y2="1682.2" class="s165 s164" stroke="#8CCE3A" fill="none" stroke-width="8px"></line>
    <line x1="1267.8" y1="1682.2" x2="1267.8" y2="1729.7" class="s164 s163" stroke="#8CCE3A" fill="none" stroke-width="8px"></line>
    <path d="M1267.8 1729.7l0 4.7c0,7.1-4.6,13.9-9.6,18.9l-79.3 79.3" class="s163 s162" stroke="#8CCE3A" fill="none" stroke-width="8px"></path>
    <line x1="824.1" y1="508.4" x2="859.1" y2="543.5" class="s234 s233" stroke="#8CCE3A" fill="none" stroke-width="8px"></line>
    <line x1="729.7" y1="335.2" x2="729.7" y2="399.9" class="s245 s246" stroke="#8CCE3A" fill="none" stroke-width="8px"></line>
    <line x1="729.7" y1="284.2" x2="729.7" y2="335.2" class="s244 s245" stroke="#8CCE3A" fill="none" stroke-width="8px"></line>
    <path d="M824.1 508.4l-88.1-88.1c-3.6,-3.6-6.3,-8.9-6.3,-14l0-6.4" class="s234 s246" stroke="#8CCE3A" fill="none" stroke-width="8px"></path>
    </g>
    <g class="ln12" stroke="#B2DAE7" fill="none" stroke-width="8px">
    <path d="M683.4 1869.7l95.4 0c12.1,0 20.7,12.5 20.7,21l0 17.5" class="s192 s191" stroke="#B2DAE7" fill="none" stroke-width="8px"></path>
    <line x1="799.5" y1="1954.9" x2="799.5" y2="1908.2" class="s182 s192" stroke="#B2DAE7" fill="none" stroke-width="8px"></line>
    <line x1="799.5" y1="1999.9" x2="799.5" y2="1954.9" class="s183 s182" stroke="#B2DAE7" fill="none" stroke-width="8px"></line>
    <path d="M799.5 1999.9l0 15.1c0,9.7-12.1,19.4-21.8,19.4l-23.5 0" class="s184 s183" stroke="#B2DAE7" fill="none" stroke-width="8px"></path>
    <line x1="754.2" y1="2034.4" x2="647.8" y2="2034.4" class="s185 s184" stroke="#B2DAE7" fill="none" stroke-width="8px"></line>
    <line x1="647.8" y1="2034.4" x2="541.4" y2="2034.4" class="s186 s185" stroke="#B2DAE7" fill="none" stroke-width="8px"></line>
    </g>
    <g class="ln15" stroke="#D765A3" fill="none" stroke-width="8px">
    <line x1="1407.8" y1="1329.1" x2="1407.5" y2="1243.2" class="s266 s265" stroke="#D765A3" fill="none" stroke-width="8px"></line>
    <path d="M1375.2 1071.7l24.6 24c3.3,3.2 7.8,9.4 7.8,19.1l0 128.4" class="s265 s264" stroke="#D765A3" fill="none" stroke-width="8px"></path>
    <line x1="1407.5" y1="1470" x2="1407.8" y2="1329.1" class="s267 s266" stroke="#D765A3" fill="none" stroke-width="8px"></line>
    <path d="M1407.5 1470l0 13.3c0,24.8 55.6,17.4 55.6,42.1l0 11.1" class="s256 s267" stroke="#D765A3" fill="none" stroke-width="8px"></path>
    <line x1="1463.1" y1="1536.5" x2="1463.1" y2="1724.4" class="s257 s256" stroke="#D765A3" fill="none" stroke-width="8px"></line>
    <line x1="1463.1" y1="1788.2" x2="1463.1" y2="1724.4" class="s258 s257" stroke="#D765A3" fill="none" stroke-width="8px"></line>
    <line x1="1463.1" y1="1788.2" x2="1463.1" y2="1845.1" class="s259 s258" stroke="#D765A3" fill="none" stroke-width="8px"></line>
    <line x1="1375.2" y1="1071.7" x2="1296.4" y2="993" class="s264 s268" stroke="#D765A3" fill="none" stroke-width="8px"></line>
    <path d="M1296.4 993c-49.4,-49.4-55.7,-55.7-55.7,-79.2" class="s268 s269" stroke="#D765A3" fill="none" stroke-width="8px"></path>
    <line x1="1240.2" y1="913.8" x2="1240.2" y2="834.6" class="s330 s269" stroke="#D765A3" fill="none" stroke-width="8px"></line>
    </g>
    </g>
    <g fill="none" class="p2p2" stroke-width="8px">
    <line x1="1240.2" y1="831.3" x2="1263.5" y2="850.9" class="p330 p55 long" stroke="#6F4696" fill="none" stroke-width="6px"></line>
    <line x1="1207.5" y1="1306.6" x2="1228" y2="1255.3" class="p217 p114 long" stroke="#C43087" fill="none" stroke-width="6px"></line>
    <line x1="1236.7" y1="624.1" x2="1269.1" y2="624.1" class="p1 p230 long" stroke="#E2324C" fill="none" stroke-width="6px"></line>
    <polyline points="379.315,904.445 416.248,904.234 416.247,1009.96 " class="p208 p279 long" stroke="#F38456" fill="none" stroke-width="6px"></polyline>
    <line x1="388.3" y1="845" x2="457.3" y2="862.6" class="p237 p207 long" stroke="#90889C" fill="none" stroke-width="6px"></line>
    <path d="M729.7 399.9c20.9,13.1 41.8,26.3 62.6,39.4l21.8 21.8" class="p246 p229 long" stroke="#C19766" fill="none" stroke-width="6px"></path>
    <line x1="388" y1="844.5" x2="457.4" y2="833.7" class="p123 p207 long" stroke="#C43087" fill="none" stroke-width="6px"></line>
    <line x1="547.2" y1="1323.3" x2="547.2" y2="1292.1" class="p15 p210 long" stroke="#E2324C" fill="none" stroke-width="6px"></line>
    <line x1="1149.1" y1="1354.2" x2="1175.9" y2="1299.7" class="p171 p216 long" stroke="#C19766" fill="none" stroke-width="6px"></line>
    <line x1="974.8" y1="1385.7" x2="1010.4" y2="1421.3" class="p32 p215 long" stroke="#806759" fill="none" stroke-width="6px"></line>
    <line x1="1360.1" y1="939" x2="1382.3" y2="961.2" class="p132 p221 long" stroke="#FB9E4B" fill="none" stroke-width="6px"></line>
    <line x1="1354.1" y1="760.3" x2="1322.1" y2="760.3" class="p57 p223 long" stroke="#7F448E" fill="none" stroke-width="6px"></line>
    <line x1="1096.2" y1="490" x2="1110.4" y2="521.9" class="p106 p227 long" stroke="#FB6F49" fill="none" stroke-width="6px"></line>
    <line x1="371.4" y1="747.7" x2="419.6" y2="747.7" class="p124 p205 long" stroke="#C43087" fill="none" stroke-width="6px"></line>
    <line x1="517.3" y1="639.5" x2="558.4" y2="567.8" class="p22 p203 long" stroke="#806759" fill="none" stroke-width="6px"></line>
    <line x1="1148.4" y1="1354.4" x2="1175.5" y2="1384.1" class="p216 p170 long" stroke="#C19766" fill="none" stroke-width="6px"></line>
    <line x1="821.7" y1="1468.6" x2="885.3" y2="1442" class="p146 p213 long" stroke="#CC82A3" fill="none" stroke-width="6px"></line>
    <line x1="397.1" y1="809.6" x2="371.7" y2="748" class="p206 p124 long" stroke="#C43087" fill="none" stroke-width="6px"></line>
    <line x1="416.2" y1="1010" x2="416.2" y2="1077.9" class="p68 p279 long" stroke="#7AA276" fill="none" stroke-width="6px"></line>
    <line x1="416.2" y1="1010" x2="416.2" y2="904" class="p236 p279 long" stroke="#8CAC60" fill="none" stroke-width="6px"></line>
    <line x1="416.2" y1="1010" x2="449.8" y2="1010" class="p235 p279 long" stroke="#8CAC60" fill="none" stroke-width="6px"></line>
    <line x1="729.7" y1="399.9" x2="792.4" y2="439.4" class="p246 p284 long" stroke="#BDBB2A" fill="none" stroke-width="6px"></line>
    <line x1="792.2" y1="439.3" x2="814.1" y2="461.1" class="p229 p284 long" stroke="#F38456" fill="none" stroke-width="6px"></line>
    <line x1="1442.7" y1="1536.5" x2="1463.1" y2="1536.5" class="p190 p256" stroke="#B4328F" fill="none" stroke-width="8px"></line>
    <line x1="824.2" y1="508.4" x2="846.9" y2="508.4" class="p157 p234" stroke="#97B977" fill="none" stroke-width="8px"></line>
    <line x1="914.4" y1="440.9" x2="923.8" y2="461.3" class="p158 p228" stroke="#CC82A3" fill="none" stroke-width="8px"></line>
    <line x1="1247.6" y1="668.1" x2="1271.3" y2="668.1" class="p2 p224" stroke="#E2324C" fill="none" stroke-width="8px"></line>
    <line x1="952.9" y1="742" x2="953" y2="764.4" class="p102 p82" stroke="#BF3F00" fill="none" stroke-width="8px"></line>
    <line x1="1096.5" y1="819.2" x2="1096.5" y2="843" class="p6 p81" stroke="#A60203" fill="none" stroke-width="8px"></line>
    <line x1="955.5" y1="960.2" x2="955.5" y2="982.7" class="p118 p9" stroke="#AF0240" fill="none" stroke-width="8px"></line>
    <line x1="1001.5" y1="1060.2" x2="1016.9" y2="1044.2" class="p99 p117" stroke="#C83F3D" fill="none" stroke-width="8px"></line>
    <line x1="880" y1="1058.2" x2="880" y2="1080.5" class="p29 p52" stroke="#084B54" fill="none" stroke-width="8px"></line>
    <line x1="880.1" y1="1035.8" x2="880" y2="1058.2" class="p10 p29" stroke="#6B3A13" fill="none" stroke-width="8px"></line>
    <line x1="603.8" y1="951.1" x2="587.2" y2="966.2" class="p85 p120" stroke="#88003D" fill="none" stroke-width="8px"></line>
    <line x1="639.4" y1="817.6" x2="662.1" y2="817.6" class="p26 p84" stroke="#443710" fill="none" stroke-width="8px"></line>
    <line x1="582.4" y1="737.9" x2="582.4" y2="760.6" class="p25 p239" stroke="#199063" fill="none" stroke-width="8px"></line>
    <line x1="457.4" y1="833.7" x2="457.4" y2="862.9" class="p123 p237" stroke="#5D5890" fill="none" stroke-width="8px"></line>
    <line x1="379.3" y1="904.4" x2="416.2" y2="904.4" class="p208 p236" stroke="#90889C" fill="none" stroke-width="8px"></line>
    <line x1="393.3" y1="1077.9" x2="416.2" y2="1077.9" class="p68 p209" stroke="#7E7EB3" fill="none" stroke-width="8px"></line>
    <line x1="405.4" y1="1140.6" x2="421.4" y2="1156.6" class="p66 p231" stroke="#7E7EB3" fill="none" stroke-width="8px"></line>
    <line x1="378.5" y1="1199.7" x2="362.7" y2="1215.4" class="p48 p194" stroke="#838246" fill="none" stroke-width="8px"></line>
    <line x1="974.8" y1="1583.2" x2="995.5" y2="1591.6" class="p34 p181 uc" stroke="#7D7D7D" fill="none" stroke-width="8px" stroke-opacity="0.25"></line>
    <line x1="805.3" y1="1632.2" x2="821.7" y2="1650.4" class="p179 p143" stroke="#65ABAD" fill="none" stroke-width="8px"></line>
    <line x1="821.7" y1="814.3" x2="844.1" y2="814.3" class="p152 p176" stroke="#97B977" fill="none" stroke-width="8px"></line>
    <line x1="1178.9" y1="1832.6" x2="1201.4" y2="1832.6" class="p162 p39" stroke="#4B9E2D" fill="none" stroke-width="8px"></line>
    <line x1="683.4" y1="1847.8" x2="683.4" y2="1869.7" class="p86 p191" stroke="#D8AC73" fill="none" stroke-width="8px"></line>
    <line x1="668.8" y1="1382.1" x2="647.8" y2="1390.2" class="p95 p211" stroke="#FB6F49" fill="none" stroke-width="8px"></line>
    <line x1="1175.6" y1="1105.3" x2="1191.3" y2="1121.1" class="p173 p134" stroke="#C5D51E" fill="none" stroke-width="8px"></line>
    <line x1="1175.6" y1="1233.7" x2="1191" y2="1218.3" class="p115 p172" stroke="#8F675A" fill="none" stroke-width="8px"></line>
    <line x1="974.8" y1="1288.6" x2="990.5" y2="1272.9" class="p31 p78" stroke="#443710" fill="none" stroke-width="8px"></line>
    <line x1="636.1" y1="1203.3" x2="636.1" y2="1180.6" class="p13 p75" stroke="#A60203" fill="none" stroke-width="8px"></line>
    <line x1="710.1" y1="1252.3" x2="710.1" y2="1275.1" class="p76 p97" stroke="#BF3F00" fill="none" stroke-width="8px"></line>
    <line x1="805.7" y1="1293.3" x2="821.7" y2="1309.2" class="p77 p148" stroke="#90525A" fill="none" stroke-width="8px"></line>
    <line x1="806.7" y1="736" x2="821.7" y2="751" class="p153 p83" stroke="#90525A" fill="none" stroke-width="8px"></line>
    <line x1="799.5" y1="1954.9" x2="821.7" y2="1954.9" class="p182 p137" stroke="#AABFCD" fill="none" stroke-width="8px"></line>
    <path d="M974.7 1196.7c0,0.2 0,0.4 0,0.5 0,8.4-6.8,15.2-15.2,15.2-4.2,0-8.2,-1.8-11.1,-4.8" class="p30 p136" stroke="#84A611" fill="none" stroke-width="8px"></path>
    <path d="M948.4 1207.6c-2.6,-2.8-4.1,-6.5-4.1,-10.4 0,-3.9 1.5,-7.6 4.1,-10.4" class="p136 p98" stroke="#FFAE01" fill="none" stroke-width="8px"></path>
    <path d="M948.4 1186.8c2.9,-3.1 6.9,-4.8 11.1,-4.8 8.2,0 14.9,6.5 15.2,14.7" class="p98 p30" stroke="#847710" fill="none" stroke-width="8px"></path>
    <path d="M739.9 1105.6c0.2,-16.2 13.4,-29.2 29.6,-29.2 5.4,0 10.6,1.5 15.2,4.2" class="p150 p51" stroke="#54669E" fill="none" stroke-width="8px"></path>
    <path d="M784.5 1131.5c-4.5,2.7-9.7,4.1-15,4.1-16.3,0-29.6,-13.2-29.6,-29.6 0,-0.1 0,-0.3 0,-0.4" class="p11 p150" stroke="#B7555D" fill="none" stroke-width="8px"></path>
    <path d="M784.7 1080.7c8.9,5.3 14.3,15 14.3,25.3 0,10.5-5.5,20.2-14.6,25.5" class="p51 p11" stroke="#6A1647" fill="none" stroke-width="8px"></path>
    <path d="M784.1 1131.4c-8.6,-5.2-14,-14.3-14.3,-24.3" class="p73 p11" stroke="#69506C" fill="none" stroke-width="8px"></path>
    <path d="M769.8 1107c-0,-0.3-0,-0.7-0,-1 0,-10.6 5.7,-20.5 15,-25.7" class="p51 p73" stroke="#0662AE" fill="none" stroke-width="8px"></path>
    <path d="M552 1080.4c-7.2,-4.2-11.7,-11.9-11.7,-20.2 0,-8.3 4.4,-16 11.7,-20.2" class="p49 p70" stroke="#0662AE" fill="none" stroke-width="8px"></path>
    <path d="M587 1060.2c0,12.9-10.4,23.3-23.3,23.3-4.1,0-8.1,-1.1-11.7,-3.1" class="p74 p49" stroke="#431444" fill="none" stroke-width="8px"></path>
    <path d="M552 1040c3.5,-2 7.6,-3.1 11.7,-3.1 12.9,0 23.3,10.4 23.3,23.3" class="p74 p70" stroke="#424E69" fill="none" stroke-width="8px"></path>
    <path d="M1113.5 1161.6c2.8,-2.5 6.5,-3.9 10.3,-3.9 4.3,0 8.3,1.8 11.3,4.8" class="p79 p116" stroke="#88003D" fill="none" stroke-width="8px"></path>
    <path d="M1135 1162.5c2.7,2.9 4.3,6.7 4.3,10.7 0,8.6-7,15.5-15.5,15.5" class="p116 p135" stroke="#C86E3F" fill="none" stroke-width="8px"></path>
    <path d="M1123.8 1188.8c-8.6,0-15.5,-7-15.5,-15.5 0,-4.5 1.9,-8.7 5.2,-11.6" class="p135 p79" stroke="#BF6E01" fill="none" stroke-width="8px"></path>
    <path d="M1153.1 991.5c0,0.2 0,0.4 0,0.5 0,8.5-6.9,15.4-15.4,15.4-4.1,0-8.1,-1.7-11,-4.6" class="p53 p80" stroke="#431444" fill="none" stroke-width="8px"></path>
    <path d="M1137.7 976.6c8.3,0 15.1,6.6 15.4,14.9" class="p80 p53" stroke="#431444" fill="none" stroke-width="8px"></path>
    <path d="M1126.7 1002.8c-2.8,-2.9-4.4,-6.8-4.4,-10.8 0,-8.5 6.9,-15.4 15.4,-15.4" class="p174 p53" stroke="#497B61" fill="none" stroke-width="8px"></path>
    <path d="M1003.8 880.1c6.3,1.8 10.7,7.6 10.7,14.2 0,3.6-1.3,7-3.6,9.7" class="p175 p8" stroke="#AC6920" fill="none" stroke-width="8px"></path>
    <path d="M1010.9 904c-2.8,3.2-6.9,5.1-11.2,5.1-6.7,0-12.6,-4.5-14.3,-11" class="p8 p100" stroke="#E64203" fill="none" stroke-width="8px"></path>
    <path d="M985.4 898.2c-0.3,-1.2-0.5,-2.5-0.5,-3.8 0,-8.2 6.6,-14.8 14.8,-14.8 1.4,0 2.8,0.2 4.1,0.6" class="p100 p175" stroke="#C5A61D" fill="none" stroke-width="8px"></path>
    <path d="M795.5 973.7c-1.3,-2.3-2,-4.9-2,-7.6 0,-8.4 6.8,-15.1 15.1,-15.1" class="p28 p119" stroke="#4E374D" fill="none" stroke-width="8px"></path>
    <path d="M821.7 973.7c-2.7,4.7-7.7,7.6-13.1,7.6-5.4,0-10.4,-2.9-13.1,-7.6" class="p151 p28" stroke="#568A6A" fill="none" stroke-width="8px"></path>
    <path d="M808.6 951c8.4,0 15.1,6.8 15.1,15.1 0,2.7-0.7,5.3-2,7.6" class="p151 p119" stroke="#9A5297" fill="none" stroke-width="8px"></path>
    <line x1="1339.1" y1="1091.4" x2="1375.5" y2="1072" class="p264 p219" stroke="#E7629B" fill="none" stroke-width="8px"></line>
    <line x1="1297" y1="992.9" x2="1320.1" y2="992.9" class="p133 p268" stroke="#EBA153" fill="none" stroke-width="8px"></line>
    <path d="M478.1 1039.3c-4.8,4.3-11.4,5.9-17.7,4.4-7.5,-1.8-13.2,-7.7-14.7,-15.2" class="p69 p193" stroke="#82BC6B" fill="none" stroke-width="8px"></path>
    <path d="M445.7 1028.5c-0.6,-2.8-0.5,-5.7 0.1,-8.5 0.8,-3.4 2.5,-6.5 4.8,-9" class="p193 p235" stroke="#94C754" fill="none" stroke-width="8px"></path>
    <path d="M450.7 1011c4.8,-5.1 12,-7.3 18.9,-5.6 10.6,2.5 17.1,13.2 14.6,23.7-0.9,3.9-3.1,7.5-6.1,10.2" class="p235 p69" stroke="#17A6BC" fill="none" stroke-width="8px"></path>
    <line x1="489.1" y1="1503.5" x2="515.9" y2="1530.3" class="p18 p339" stroke="#7B5B56" fill="none" stroke-width="8px"></line>
    <line x1="668.9" y1="1594.2" x2="645.4" y2="1612.1" class="p341 p91" stroke="#949853" fill="none" stroke-width="8px"></line>
    <path d="M208.4 923c0.7,-0 1.4,-0.1 2.1,-0.1 17.8,0 32.2,14.4 32.2,32.2 0,0.7-0,1.4-0.1,2.1" class="p46 p61" stroke="#0662AE" fill="none" stroke-width="8px"></path>
    <path d="M184.2 973.8c-3.7,-5.3-5.9,-11.7-5.9,-18.6 0,-17.1 13.3,-31.1 30.1,-32.1" class="p46 p344" stroke="#186C97" fill="none" stroke-width="8px"></path>
    <path d="M242.6 957.2c-1.1,16.8-15,30.1-32.1,30.1-10.8,0-20.4,-5.4-26.3,-13.6" class="p61 p344" stroke="#17A6BC" fill="none" stroke-width="8px"></path>
    <line x1="362.8" y1="1472" x2="399.7" y2="1472" class="p247 p338" stroke="#94C754" fill="none" stroke-width="8px"></line>
    </g>
    <g fill="none" stroke="#FFFFFF" stroke-width="2px">
    <line x1="1240.2" y1="831.3" x2="1263.5" y2="850.9" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <path d="M416.2 1010l35-0c5.3,-4.6 11.5,-6.3 18.3,-4.6 10.6,2.5 17.1,13.2 14.6,23.7-0.9,3.9-3.1,7.5-6.1,10.2" stroke="#FFFFFF" fill="none" stroke-width="2px"></path>
    <line x1="1207.5" y1="1306.6" x2="1228" y2="1255.3" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <path d="M1175.2 991.5l-22.2-0c0,0.2 0,0.4 0,0.6 0,8.5-6.9,15.4-15.4,15.4-4.1,0-8.1,-1.7-11,-4.6" stroke="#FFFFFF" fill="none" stroke-width="2px"></path>
    <line x1="821.7" y1="682.1" x2="782.9" y2="633.3" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="1236.7" y1="624.1" x2="1269.1" y2="624.1" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <polyline points="379.315,904.445 416.248,904.234 416.247,1009.96 " stroke="#FFFFFF" fill="none" stroke-width="2px"></polyline>
    <line x1="388.3" y1="845" x2="457.3" y2="862.6" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <path d="M729.7 399.9c20.9,13.1 41.8,26.3 62.6,39.4l21.8 21.8" stroke="#FFFFFF" fill="none" stroke-width="2px"></path>
    <line x1="388" y1="844.5" x2="457.4" y2="833.7" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="547.2" y1="1323.3" x2="547.2" y2="1292.1" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="1149.1" y1="1354.2" x2="1175.9" y2="1299.7" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="974.8" y1="1385.7" x2="1010.4" y2="1421.3" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="1360.1" y1="939" x2="1382.3" y2="961.2" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="1354.1" y1="760.3" x2="1322.1" y2="760.3" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="1096.2" y1="490" x2="1110.4" y2="521.9" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="371.4" y1="747.7" x2="419.6" y2="747.7" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="517.3" y1="639.5" x2="558.4" y2="567.8" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="1148.4" y1="1354.4" x2="1175.5" y2="1384.1" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="821.7" y1="1468.6" x2="885.3" y2="1442" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="1153" y1="991.4" x2="1175.2" y2="991.5" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="1096.5" y1="788.5" x2="1096.5" y2="819.2" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="397.1" y1="809.6" x2="371.7" y2="748" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="416.2" y1="1010" x2="416.2" y2="1077.9" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="416.2" y1="1010" x2="416.2" y2="904" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="416.2" y1="1010" x2="449.8" y2="1010" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="729.7" y1="399.9" x2="792.4" y2="439.4" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="792.2" y1="439.3" x2="814.1" y2="461.1" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="1442.7" y1="1536.5" x2="1463.1" y2="1536.5" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="824.2" y1="508.4" x2="846.9" y2="508.4" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="914.4" y1="440.9" x2="923.8" y2="461.3" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="1247.6" y1="668.1" x2="1271.3" y2="668.1" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="952.9" y1="742" x2="953" y2="764.4" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="1096.5" y1="819.2" x2="1096.5" y2="843" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="955.5" y1="960.2" x2="955.5" y2="982.7" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="1001.5" y1="1060.2" x2="1016.9" y2="1044.2" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="880" y1="1058.2" x2="880" y2="1080.5" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="880.1" y1="1035.8" x2="880" y2="1058.2" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="603.8" y1="951.1" x2="587.2" y2="966.2" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="639.4" y1="817.6" x2="662.1" y2="817.6" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="582.4" y1="737.9" x2="582.4" y2="760.6" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="457.4" y1="833.7" x2="457.4" y2="862.9" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="379.3" y1="904.4" x2="416.2" y2="904.4" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="393.3" y1="1077.9" x2="416.2" y2="1077.9" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="405.4" y1="1140.6" x2="421.4" y2="1156.6" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="378.5" y1="1199.7" x2="362.7" y2="1215.4" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="974.8" y1="1583.2" x2="995.5" y2="1591.6" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="805.3" y1="1632.2" x2="821.7" y2="1650.4" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="821.7" y1="814.3" x2="844.1" y2="814.3" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="1178.9" y1="1832.6" x2="1201.4" y2="1832.6" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="683.4" y1="1847.8" x2="683.4" y2="1869.7" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="668.8" y1="1382.1" x2="647.8" y2="1390.2" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="1175.6" y1="1105.3" x2="1191.3" y2="1121.1" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="1175.6" y1="1233.7" x2="1191" y2="1218.3" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="974.8" y1="1288.6" x2="990.5" y2="1272.9" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="636.1" y1="1203.3" x2="636.1" y2="1180.6" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="710.1" y1="1252.3" x2="710.1" y2="1275.1" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="805.7" y1="1293.3" x2="821.7" y2="1309.2" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="806.7" y1="736" x2="821.7" y2="751" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="799.5" y1="1954.9" x2="821.7" y2="1954.9" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <circle cx="959.5" cy="1197.2" r="15.2" stroke="#FFFFFF" fill="none" stroke-width="2px"></circle>
    <path d="M784.1 1131.4c-8.6,-5.2-14,-14.3-14.3,-24.3" stroke="#FFFFFF" fill="none" stroke-width="2px"></path>
    <path d="M769.8 1107c-0,-0.3-0,-0.7-0,-1 0,-10.6 5.7,-20.5 15,-25.7" stroke="#FFFFFF" fill="none" stroke-width="2px"></path>
    <circle cx="769.5" cy="1106" r="29.6" stroke="#FFFFFF" fill="none" stroke-width="2px"></circle>
    <circle cx="563.7" cy="1060.2" r="23.3" stroke="#FFFFFF" fill="none" stroke-width="2px"></circle>
    <circle cx="1123.8" cy="1173.2" r="15.5" stroke="#FFFFFF" fill="none" stroke-width="2px"></circle>
    <circle cx="999.7" cy="894.3" r="14.8" stroke="#FFFFFF" fill="none" stroke-width="2px"></circle>
    <circle cx="808.6" cy="966.1" r="15.1" stroke="#FFFFFF" fill="none" stroke-width="2px"></circle>
    <line x1="1339.1" y1="1091.4" x2="1375.5" y2="1072" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="1297" y1="992.9" x2="1320.1" y2="992.9" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <path d="M478.1 1039.3c-4.8,4.3-11.4,5.9-17.7,4.4-7.5,-1.8-13.2,-7.7-14.7,-15.2" stroke="#FFFFFF" fill="none" stroke-width="2px"></path>
    <path d="M445.7 1028.5c-0.6,-2.8-0.5,-5.7 0.1,-8.5 0.8,-3.4 2.5,-6.5 4.8,-9" stroke="#FFFFFF" fill="none" stroke-width="2px"></path>
    <path d="M450.7 1011c4.8,-5.1 12,-7.3 18.9,-5.6 10.6,2.5 17.1,13.2 14.6,23.7-0.9,3.9-3.1,7.5-6.1,10.2" stroke="#FFFFFF" fill="none" stroke-width="2px"></path>
    <circle cx="1137.7" cy="992" r="15.4" stroke="#FFFFFF" fill="none" stroke-width="2px"></circle>
    <line x1="489.1" y1="1503.5" x2="515.9" y2="1530.3" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <line x1="668.9" y1="1594.2" x2="645.4" y2="1612.1" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    <circle cx="210.5" cy="955.2" r="32.2" stroke="#FFFFFF" fill="none" stroke-width="2px"></circle>
    <line x1="362.8" y1="1472" x2="399.7" y2="1472" stroke="#FFFFFF" fill="none" stroke-width="2px"></line>
    </g>
    <g fill="#FFFFFF" class="stations" stroke-width="3px">
    <g class="ln5" stroke="#7F0000" fill="#FFFFFF" stroke-width="3px">
    <circle cx="662" cy="817.6" r="5" id="s84" stroke="#7F0000" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="806.7" cy="736" r="5" id="s83" stroke="#7F0000" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="587.2" cy="966.2" r="5" id="s85" stroke="#7F0000" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="586.6" cy="1059.9" r="5" id="s74" stroke="#7F0000" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="636.1" cy="1180.6" r="5" id="s75" stroke="#7F0000" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="710.1" cy="1252.3" r="5" id="s76" stroke="#7F0000" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="805.7" cy="1293.3" r="5" id="s77" stroke="#7F0000" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="990.5" cy="1272.9" r="5" id="s78" stroke="#7F0000" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1113.5" cy="1161.4" r="5" id="s79" stroke="#7F0000" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1153" cy="991.4" r="5" id="s80" stroke="#7F0000" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1096.5" cy="843" r="5" id="s81" stroke="#7F0000" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="952.9" cy="742" r="5" id="s82" stroke="#7F0000" fill="#FFFFFF" stroke-width="3px"></circle>
    </g>
    <g class="ln14" stroke="#F76093" fill="#FFFFFF" stroke-width="3px">
    <circle cx="923.8" cy="461.3" r="5" id="s228" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1153.9" cy="549.6" r="5" id="s226" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1197.4" cy="584.5" r="5" id="s225" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1236.7" cy="624.1" r="5" id="s230" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1271.3" cy="668.1" r="5" id="s224" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1355.8" cy="884.3" r="5" id="s222" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1354" cy="1028" r="5" id="s220" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="547.2" cy="1323.3" r="5" id="s210" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1339.5" cy="1091.6" r="5" id="s219" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1306.6" cy="1173.6" r="5" id="s218" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1207.5" cy="1306.6" r="5" id="s217" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="959.5" cy="1433.7" r="5" id="s214" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="885.3" cy="1442" r="5" id="s213" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="734.1" cy="1423.7" r="5" id="s212" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="647.8" cy="1390.2" r="5" id="s211" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="421.4" cy="1156.6" r="5" id="s231" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="392.8" cy="1077.6" r="5" id="s209" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="378.2" cy="904.3" r="5" id="s208" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="387.7" cy="844.5" r="5" id="s207" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="396.7" cy="808.6" r="5" id="s206" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="419.6" cy="747.7" r="5" id="s205" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="558.4" cy="567.8" r="5" id="s203" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1010.4" cy="1421.3" r="5" id="s215" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1148.6" cy="1354.8" r="5" id="s216" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1360.1" cy="939" r="5" id="s221" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="488.4" cy="637.2" r="5" id="s204" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="646.3" cy="511" r="5" id="s202" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="733.3" cy="477" r="5" id="s201" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1110.4" cy="521.9" r="5" id="s227" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1322.1" cy="760.3" r="5" id="s223" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="814.1" cy="461.1" r="5" id="s229" stroke="#F76093" fill="#FFFFFF" stroke-width="3px"></circle>
    </g>
    <g class="ln1" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px">
    <circle cx="1247.6" cy="668.1" r="5" id="s2" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1223.1" cy="692.6" r="5" id="s3" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1182.5" cy="733.2" r="5" id="s4" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1142.9" cy="772.9" r="5" id="s5" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1096.5" cy="819.2" r="5" id="s6" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1046.7" cy="869" r="5" id="s7" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1010.8" cy="904.1" r="5" id="s8" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="955.5" cy="960.2" r="5" id="s9" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="880" cy="1035.8" r="5" id="s10" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="784.4" cy="1131.4" r="5" id="s11" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="719.4" cy="1171.1" r="5" id="s12" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="636.1" cy="1203.3" r="5" id="s13" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="589.2" cy="1250.1" r="5" id="s14" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="547.2" cy="1292.1" r="5" id="s15" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="515.9" cy="1378.6" r="5" id="s16" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="515.9" cy="1468.3" r="5" id="s17" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="515.9" cy="1531" r="5" id="s18" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="515.9" cy="1592.6" r="5" id="s19" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="515.9" cy="1643" r="5" id="s196" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="515.9" cy="1693" r="5" id="s199" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="515.9" cy="1742.9" r="5" id="s200" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1269.1" cy="624.1" r="5" id="s1" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="515.9" cy="1808.1" r="5" id="s260" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="515.9" cy="1858.3" r="5" id="s261" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="515.9" cy="1908.7" r="5" id="s262" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="515.9" cy="1967.6" r="5" id="s263" stroke="#CD0506" fill="#FFFFFF" stroke-width="3px"></circle>
    </g>
    <g class="ln2" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px">
    <circle cx="517.3" cy="418.5" r="5" id="s20" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="517.3" cy="484.5" r="5" id="s21" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="517.3" cy="639.5" r="5" id="s22" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="517.3" cy="678.5" r="5" id="s23" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="544.5" cy="722.7" r="5" id="s24" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="582.4" cy="760.6" r="5" id="s25" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="639.4" cy="817.6" r="5" id="s26" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="713.4" cy="891.6" r="5" id="s27" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="795.5" cy="973.7" r="5" id="s28" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="880" cy="1058.2" r="5" id="s29" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="974.8" cy="1196.5" r="5" id="s30" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="974.8" cy="1288.6" r="5" id="s31" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="974.8" cy="1385.7" r="5" id="s32" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="974.8" cy="1465.7" r="5" id="s198" class="uc" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px" stroke-opacity="0.25"></circle>
    <circle cx="974.8" cy="1504.7" r="5" id="s33" class="uc" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px" stroke-opacity="0.25"></circle>
    <circle cx="974.8" cy="1583.2" r="5" id="s34" class="uc" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px" stroke-opacity="0.25"></circle>
    <circle cx="1001.8" cy="1633.1" r="5" id="s35" class="uc" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px" stroke-opacity="0.25"></circle>
    <circle cx="1050.3" cy="1681.5" r="5" id="s36" class="uc" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px" stroke-opacity="0.25"></circle>
    <circle cx="1105.7" cy="1737" r="5" id="s37" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1158.8" cy="1790" r="5" id="s38" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1201.4" cy="1832.6" r="5" id="s39" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1319.1" cy="1869.7" r="5" id="s187" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="517.3" cy="284" r="5" id="s243" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="517.3" cy="366.8" r="5" id="s254" stroke="#0A6F20" fill="#FFFFFF" stroke-width="3px"></circle>
    </g>
    <g class="ln3" stroke="#072889" fill="#FFFFFF" stroke-width="3px">
    <circle cx="208.3" cy="575.4" r="5" id="s42" stroke="#072889" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="208.3" cy="501.5" r="5" id="s41" stroke="#072889" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="208.3" cy="419.4" r="5" id="s40" stroke="#072889" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="208.3" cy="343.3" r="5" id="s188" stroke="#072889" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="208.3" cy="649.8" r="5" id="s43" stroke="#072889" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="208.3" cy="724.5" r="5" id="s44" stroke="#072889" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="208.3" cy="799.3" r="5" id="s45" stroke="#072889" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="238.3" cy="1157.1" r="5" id="s47" stroke="#072889" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="654.5" cy="1080.5" r="5" id="s50" stroke="#072889" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1193.3" cy="921.1" r="5" id="s54" stroke="#072889" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1306.4" cy="807.9" r="5" id="s56" stroke="#072889" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1406" cy="708.4" r="5" id="s58" stroke="#072889" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1420.8" cy="677.1" r="5" id="s59" stroke="#072889" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1420.8" cy="598.5" r="5" id="s60" stroke="#072889" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1263.5" cy="850.9" r="5" id="s55" stroke="#072889" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="785" cy="1080.5" r="5" id="s51" stroke="#072889" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="553" cy="1080.5" r="5" id="s49" stroke="#072889" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="378.5" cy="1199.7" r="5" id="s48" stroke="#072889" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="208.2" cy="924.3" r="5" id="s46" stroke="#072889" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="880" cy="1080.5" r="5" id="s52" stroke="#072889" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1137.7" cy="976.6" r="5" id="s53" stroke="#072889" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1354.1" cy="760.3" r="5" id="s57" stroke="#072889" fill="#FFFFFF" stroke-width="3px"></circle>
    </g>
    <g class="ln4" stroke="#069CD3" fill="#FFFFFF" stroke-width="3px">
    <circle cx="242.9" cy="957.3" r="5" id="s61" stroke="#069CD3" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="242.8" cy="1016.2" r="5" id="s62" stroke="#069CD3" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="250.7" cy="1059.9" r="5" id="s63" stroke="#069CD3" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="280.3" cy="1089.8" r="5" id="s64" stroke="#069CD3" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="324.9" cy="1134.3" r="5" id="s65" stroke="#069CD3" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="405.4" cy="1140.6" r="5" id="s66" stroke="#069CD3" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="431.6" cy="1129.5" r="5" id="s67" stroke="#069CD3" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="551.9" cy="1040.2" r="5" id="s70" stroke="#069CD3" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="654.7" cy="1040.2" r="5" id="s71" stroke="#069CD3" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="715.4" cy="1052.8" r="5" id="s72" stroke="#069CD3" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="769.5" cy="1107" r="5" id="s73" stroke="#069CD3" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="478.3" cy="1039.9" r="5" id="s69" stroke="#069CD3" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="416" cy="1077.6" r="5" id="s68" stroke="#069CD3" fill="#FFFFFF" stroke-width="3px"></circle>
    </g>
    <g class="ln6" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px">
    <circle cx="1096.2" cy="341.3" r="5" id="s109" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1096.2" cy="394" r="5" id="s108" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1096.2" cy="446.6" r="5" id="s107" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1096.2" cy="490" r="5" id="s106" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1096.2" cy="557.4" r="5" id="s105" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1096.2" cy="604.2" r="5" id="s104" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1028.6" cy="688.8" r="5" id="s103" class="uc" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px" stroke-opacity="0.25"></circle>
    <circle cx="953" cy="764.4" r="5" id="s102" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="936.9" cy="808.9" r="5" id="s101" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="985.5" cy="898.2" r="5" id="s100" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1001.5" cy="1060.2" r="5" id="s99" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="948.4" cy="1186.9" r="5" id="s98" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="710.1" cy="1275.1" r="5" id="s97" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="668.8" cy="1335.8" r="5" id="s96" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="668.8" cy="1382.1" r="5" id="s95" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="668.8" cy="1457.3" r="5" id="s94" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="668.8" cy="1501.5" r="5" id="s93" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="668.8" cy="1546" r="5" id="s92" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="668.8" cy="1594.3" r="5" id="s91" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="668.8" cy="1670.4" r="5" id="s90" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="668.8" cy="1711.9" r="5" id="s89" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="668.8" cy="1759.1" r="5" id="s88" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="668.8" cy="1803.2" r="5" id="s87" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="683.4" cy="1847.8" r="5" id="s86" stroke="#FF7F00" fill="#FFFFFF" stroke-width="3px"></circle>
    </g>
    <g class="ln7" stroke="#92007B" fill="#FFFFFF" stroke-width="3px">
    <circle cx="362.8" cy="343.7" r="5" id="s128" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="362.8" cy="411.4" r="5" id="s127" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="362.8" cy="508.4" r="5" id="s126" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="362.8" cy="556.5" r="5" id="s195" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="362.8" cy="638.4" r="5" id="s125" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="371.4" cy="747.7" r="5" id="s124" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="457.4" cy="833.7" r="5" id="s123" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="536.2" cy="912.5" r="5" id="s122" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="603.8" cy="951.1" r="5" id="s120" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="560.1" cy="936.4" r="5" id="s121" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="808.6" cy="951.1" r="5" id="s119" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="955.5" cy="982.7" r="5" id="s118" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1016.9" cy="1044.2" r="5" id="s117" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1135.2" cy="1162.5" r="5" id="s116" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1191" cy="1218.3" r="5" id="s115" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1228" cy="1255.3" r="5" id="s114" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1322.3" cy="1349.5" r="5" id="s113" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1381.6" cy="1408.9" r="5" id="s112" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1431.8" cy="1459.1" r="5" id="s111" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1443.2" cy="1486.3" r="5" id="s110" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1443" cy="1536.5" r="5" id="s190" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1443.1" cy="1601.7" r="5" id="s189" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1443.1" cy="1652.9" r="5" id="s197" stroke="#92007B" fill="#FFFFFF" stroke-width="3px"></circle>
    </g>
    <g class="ln8" stroke="#FFDD03" fill="#FFFFFF" stroke-width="3px">
    <circle cx="1512.3" cy="1060.2" r="5" id="s129" stroke="#FFDD03" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1468.8" cy="1016.7" r="5" id="s130" stroke="#FFDD03" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1438.5" cy="986.4" r="5" id="s131" stroke="#FFDD03" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1382.3" cy="961.2" r="5" id="s132" stroke="#FFDD03" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1319.4" cy="993" r="5" id="s133" stroke="#FFDD03" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1191.3" cy="1121.1" r="5" id="s134" stroke="#FFDD03" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1123.8" cy="1188.8" r="5" id="s135" stroke="#FFDD03" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="948.4" cy="1207.6" r="5" id="s136" stroke="#FFDD03" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="362.7" cy="1215.4" r="5" id="s194" stroke="#FFDD03" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="362.8" cy="1287.9" r="5" id="s240" stroke="#FFDD03" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="362.8" cy="1341.9" r="5" id="s241" stroke="#FFDD03" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="362.8" cy="1404.7" r="5" id="s242" stroke="#FFDD03" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="362.8" cy="1471.5" r="5" id="s247" stroke="#FFDD03" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="362.8" cy="1557.7" r="5" id="s248" stroke="#FFDD03" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="362.8" cy="1607.5" r="5" id="s249" stroke="#FFDD03" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="362.8" cy="1658.9" r="5" id="s250" stroke="#FFDD03" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="362.8" cy="1716.3" r="5" id="s251" stroke="#FFDD03" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="362.8" cy="1784.3" r="5" id="s252" stroke="#FFDD03" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="362.8" cy="1862.4" r="5" id="s253" stroke="#FFDD03" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="445.6" cy="1029" r="5" id="s193" stroke="#FFDD03" fill="#FFFFFF" stroke-width="3px"></circle>
    </g>
    <g class="ln9" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px">
    <circle cx="942.2" cy="283.4" r="5" id="s161" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="942.2" cy="340" r="5" id="s160" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="942.2" cy="396.5" r="5" id="s159" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="914.4" cy="440.9" r="5" id="s158" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="847" cy="508.4" r="5" id="s157" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="821.7" cy="548.9" r="5" id="s156" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="821.7" cy="586.2" r="5" id="s155" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="821.7" cy="682.1" r="5" id="s154" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="821.7" cy="751" r="5" id="s153" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="821.7" cy="814.3" r="5" id="s152" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="821.7" cy="973.7" r="5" id="s151" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="739.8" cy="1105.7" r="5" id="s150" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="821.7" cy="1257.1" r="5" id="s149" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="821.7" cy="1309.2" r="5" id="s148" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="821.7" cy="1364.1" r="5" id="s147" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="821.7" cy="1468.6" r="5" id="s146" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="821.7" cy="1513.8" r="5" id="s145" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="821.7" cy="1554.1" r="5" id="s144" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="821.7" cy="1650.4" r="5" id="s143" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="821.7" cy="1700.7" r="5" id="s142" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="821.7" cy="1742" r="5" id="s141" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="821.7" cy="1782.9" r="5" id="s140" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="821.7" cy="1824.2" r="5" id="s139" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="821.7" cy="1887.7" r="5" id="s138" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="821.7" cy="1954.9" r="5" id="s137" stroke="#A2A5B4" fill="#FFFFFF" stroke-width="3px"></circle>
    </g>
    <g class="ln10" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px">
    <circle cx="859.1" cy="543.5" r="5" id="s233" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="899" cy="583.3" r="5" id="s232" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="910.4" cy="644.8" r="5" id="s178" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="894.4" cy="690.4" r="5" id="s177" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="844.1" cy="814.3" r="5" id="s176" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1003.9" cy="880.1" r="5" id="s175" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1126.7" cy="1003" r="5" id="s174" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1175.6" cy="1105.3" r="5" id="s173" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1175.6" cy="1233.7" r="5" id="s172" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1175.6" cy="1299.4" r="5" id="s171" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1175.7" cy="1383.8" r="5" id="s170" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1267.8" cy="1493.9" r="5" id="s168" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1267.8" cy="1540.9" r="5" id="s167" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1267.8" cy="1587.7" r="5" id="s166" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1267.8" cy="1634.8" r="5" id="s165" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1267.8" cy="1682.2" r="5" id="s164" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1267.8" cy="1729.7" r="5" id="s163" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1178.9" cy="1832.6" r="5" id="s162" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1231.2" cy="1441" r="5" id="s169" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="824.1" cy="508.4" r="5" id="s234" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="729.7" cy="399.9" r="5" id="s246" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="729.7" cy="335.2" r="5" id="s245" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="729.7" cy="284.2" r="5" id="s244" stroke="#8CCE3A" fill="#FFFFFF" stroke-width="3px"></circle>
    </g>
    <g class="ln12" stroke="#B2DAE7" fill="#FFFFFF" stroke-width="3px">
    <circle cx="683.4" cy="1869.7" r="5" id="s191" stroke="#B2DAE7" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="799.5" cy="1908.2" r="5" id="s192" stroke="#B2DAE7" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="799.5" cy="1954.9" r="5" id="s182" stroke="#B2DAE7" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="799.5" cy="1999.9" r="5" id="s183" stroke="#B2DAE7" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="754.2" cy="2034.4" r="5" id="s184" stroke="#B2DAE7" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="647.8" cy="2034.4" r="5" id="s185" stroke="#B2DAE7" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="541.4" cy="2034.4" r="5" id="s186" stroke="#B2DAE7" fill="#FFFFFF" stroke-width="3px"></circle>
    </g>
    <g class="ln11" stroke="#29B1A6" fill="#FFFFFF" stroke-width="3px">
    <circle cx="582.4" cy="737.9" r="5" id="s239" stroke="#29B1A6" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="416.3" cy="904.2" r="5" id="s236" stroke="#29B1A6" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="449.8" cy="1010.5" r="5" id="s235" stroke="#29B1A6" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="542.1" cy="778.2" r="5" id="s238" stroke="#29B1A6" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="457.4" cy="862.9" r="5" id="s237" stroke="#29B1A6" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="807.8" cy="668.1" r="5" id="s255" stroke="#29B1A6" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="354.8" cy="863.5" r="5" id="s331" stroke="#29B1A6" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="184.4" cy="974" r="5" id="s344" stroke="#29B1A6" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="183.8" cy="1230.8" r="5" id="s343" stroke="#29B1A6" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="290.6" cy="1363.8" r="5" id="s337" stroke="#29B1A6" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="398.9" cy="1472.1" r="5" id="s338" stroke="#29B1A6" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="488.9" cy="1503.7" r="5" id="s339" stroke="#29B1A6" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="587.6" cy="1554.1" r="5" id="s340" stroke="#29B1A6" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="645.5" cy="1612.2" r="5" id="s341" stroke="#29B1A6" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="738.2" cy="1632.5" r="5" id="s342" stroke="#29B1A6" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="224.5" cy="881.5" r="5" id="s345" stroke="#29B1A6" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="287.2" cy="863.5" r="5" id="s332" stroke="#29B1A6" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="995.5" cy="1591.6" r="5" id="s181" class="uc" stroke="#29B1A6" fill="#FFFFFF" stroke-width="3px" stroke-opacity="0.25"></circle>
    <circle cx="805.3" cy="1631.8" r="5" id="s179" stroke="#29B1A6" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="879.2" cy="1631.7" r="5" id="s180" class="uc" stroke="#29B1A6" fill="#FFFFFF" stroke-width="3px" stroke-opacity="0.25"></circle>
    </g>
    <g class="ln15" stroke="#D765A3" fill="#FFFFFF" stroke-width="3px">
    <circle cx="1463.1" cy="1536.5" r="5" id="s256" stroke="#D765A3" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1463.1" cy="1724.4" r="5" id="s257" stroke="#D765A3" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1463.1" cy="1788.2" r="5" id="s258" stroke="#D765A3" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1463.1" cy="1845.1" r="5" id="s259" stroke="#D765A3" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1407.5" cy="1470" r="5" id="s267" stroke="#D765A3" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1407.5" cy="1328.8" r="5" id="s266" stroke="#D765A3" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1407.5" cy="1243.2" r="5" id="s265" stroke="#D765A3" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1375.2" cy="1071.7" r="5" id="s264" stroke="#D765A3" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1296.4" cy="993" r="5" id="s268" stroke="#D765A3" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1240.7" cy="913.8" r="5" id="s269" stroke="#D765A3" fill="#FFFFFF" stroke-width="3px"></circle>
    <circle cx="1240.2" cy="831.3" r="5" id="s330" stroke="#D765A3" fill="#FFFFFF" stroke-width="3px"></circle>
    </g>
    <g style="opacity:0.5" fill="#FFFFFF">
    <rect x="1032" y="917" width="27" height="11" fill="#FFFFFF"></rect>
    <rect x="415" y="726" width="26" height="11" fill="#FFFFFF"></rect>
    <rect x="1331" y="816" width="30" height="12" fill="#FFFFFF"></rect>
    <rect x="1275" y="693" width="33" height="12" fill="#FFFFFF"></rect>
    <rect x="462" y="649" width="26" height="11" fill="#FFFFFF"></rect>
    <rect x="1401" y="1391" width="15" height="12" fill="#FFFFFF"></rect>
    <rect x="412" y="885" width="33" height="12" fill="#FFFFFF"></rect>
    <rect x="1070" y="769" width="24" height="11" fill="#FFFFFF"></rect>
    <rect x="1128" y="827" width="26" height="12" fill="#FFFFFF"></rect>
    <rect x="1251" y="1042" width="26" height="12" fill="#FFFFFF"></rect>
    <rect x="1337" y="1188" width="26" height="12" fill="#FFFFFF"></rect>
    <rect x="1257" y="1418" width="43" height="12" fill="#FFFFFF"></rect>
    <rect x="1061" y="1616" width="33" height="12" fill="#FFFFFF"></rect>
    <rect x="1221" y="1772" width="26" height="12" fill="#FFFFFF"></rect>
    <rect x="815" y="930" width="15" height="11" fill="#FFFFFF"></rect>
    <rect x="716" y="753" width="52" height="13" fill="#FFFFFF"></rect>
    <rect x="813" y="645" width="19" height="11" fill="#FFFFFF"></rect>
    <rect x="780" y="592" width="24" height="11" fill="#FFFFFF"></rect>
    <rect x="779" y="550" width="24" height="11" fill="#FFFFFF"></rect>
    <rect x="849" y="489" width="24" height="11" fill="#FFFFFF"></rect>
    <rect x="1253" y="1233" width="118" height="12" fill="#FFFFFF"></rect>
    <rect x="1378" y="1081" width="26" height="12" fill="#FFFFFF"></rect>
    <rect x="1167" y="969" width="17" height="12" fill="#FFFFFF"></rect>
    <rect x="1133" y="1094" width="17" height="12" fill="#FFFFFF"></rect>
    <rect x="1103" y="1137" width="31" height="12" fill="#FFFFFF"></rect>
    <rect x="1082" y="1013" width="28" height="12" fill="#FFFFFF"></rect>
    <rect x="957" y="993" width="28" height="12" fill="#FFFFFF"></rect>
    <rect x="786" y="1109" width="27" height="12" fill="#FFFFFF"></rect>
    <rect x="839" y="1028" width="29" height="12" fill="#FFFFFF"></rect>
    <rect x="827" y="1015" width="34" height="12" fill="#FFFFFF"></rect>
    <rect x="462" y="1139" width="26" height="12" fill="#FFFFFF"></rect>
    <rect x="351" y="1155" width="24" height="12" fill="#FFFFFF"></rect>
    <rect x="163" y="1086" width="62" height="14" fill="#FFFFFF"></rect>
    <rect x="527" y="1059" width="28" height="11" fill="#FFFFFF"></rect>
    <rect x="452" y="1090" width="28" height="12" fill="#FFFFFF"></rect>
    <rect x="633" y="830" width="40" height="12" fill="#FFFFFF"></rect>
    <rect x="756" y="1035" width="29" height="12" fill="#FFFFFF"></rect>
    <rect x="480" y="813" width="35" height="12" fill="#FFFFFF"></rect>
    <rect x="435" y="868" width="74" height="12" fill="#FFFFFF"></rect>
    <rect x="1020" y="1057" width="44" height="12" fill="#FFFFFF"></rect>
    <rect x="1073" y="1188" width="32" height="12" fill="#FFFFFF"></rect>
    <rect x="937" y="639" width="30" height="11" fill="#FFFFFF"></rect>
    <rect x="1237" y="929" width="17" height="12" fill="#FFFFFF"></rect>
    <rect x="1268" y="971" width="23" height="12" fill="#FFFFFF"></rect>
    <rect x="663" y="732" width="39" height="13" fill="#FFFFFF"></rect>
    <rect x="895" y="1087" width="36" height="13" fill="#FFFFFF"></rect>
    <rect x="151" y="1155" width="54" height="25" fill="#FFFFFF"></rect>
    <rect x="546" y="1532" width="62" height="14" fill="#FFFFFF"></rect>
    <rect x="219" y="931" width="62" height="14" fill="#FFFFFF"></rect>
    </g>
    <g id="myicon" pointer-events="all">
    <g text-anchor="start" pointer-events="all">
        <text x="440" y="1147" class="s67" fill="#555555">Студенческая</text>
        <text x="846" y="1097" class="s52" fill="#555555">Площадь Революции</text>
        <text x="1158" y="543" class="s226" fill="#555555">Ростокино</text>
        <text x="437" y="878" class="s237" fill="#555555">Хорошёвская</text>
        <text x="389" y="894" class="s208 s236" fill="#555555">Шелепиха</text>
        <text x="453" y="997" class="s235 s193" fill="#555555">Деловой центр</text>
        <text x="904" y="700" class="s177" fill="#555555">Достоевская</text>
        <text x="1520" y="1052" class="s129" fill="#555555">Новокосино</text>
        <text x="1476" y="1008" class="s130" fill="#555555">Новогиреево</text>
        <text x="987" y="1297" class="s78 s31" fill="#555555">Павелецкая</text>
        <text x="1108" y="836" class="s81 s6" fill="#555555">Комсомольская</text>
        <text x="549" y="903" class="s122 s280" fill="#555555">Беговая</text>
        <text x="1284" y="668" class="s224" fill="#555555">Локомотив</text>
      <text x="1364" y="1034" class="s220" fill="#555555">Андроновка</text>
      <text x="1373" y="1091" class="s219 s264" fill="#555555">Нижегородская</text>
      <text x="1309" y="1197" class="s218 s309" fill="#555555">Новохохловская</text>
      <text x="220" y="505" class="s41 s327" fill="#555555">Волоколамская</text>
      <text x="561" y="1325" class="s210" fill="#555555">Лужники</text>
      <text x="431" y="763" class="s205" fill="#555555">Панфиловская</text>
      <text x="735" y="1415" class="s212" fill="#555555">Крымская</text>
      <text x="847" y="1417" class="s213" fill="#555555">Верхние</text>
      <text x="859" y="1430" class="s213" fill="#555555">Котлы</text>
      <text x="1209" y="1328" class="s217" fill="#555555">Угрешская</text>
      <text x="1236" y="611" class="s1 s230" fill="#555555">Бульвар Рокоссовского</text>
      <text x="1232" y="702" class="s3" fill="#555555">Преображенская</text>
      <text x="1233" y="714" class="s3" fill="#555555">площадь</text>
      <text x="1193" y="748" class="s4" fill="#555555">Сокольники</text>
      <text x="1148" y="791" class="s5" fill="#555555">Красносельская</text>
      <text x="1055" y="887" class="s7" fill="#555555">Красные</text>
      <text x="1055" y="899" class="s7" fill="#555555">Ворота</text>
      <text x="1015" y="925" class="s8" fill="#555555">Чистые пруды</text>
      <text x="794" y="1148" class="s11" fill="#555555">Библиотека</text>
      <text x="794" y="1160" class="s11" fill="#555555">им. Ленина</text>
      <text x="682" y="1191" class="s12" fill="#555555">Кропоткинская</text>
      <text x="561" y="1296" class="s15" fill="#555555">Спортивная</text>
      <text x="528" y="1382" class="s16" fill="#555555">Воробьёвы</text>
      <text x="528" y="1395" class="s16" fill="#555555">горы</text>
      <text x="529" y="1472" class="s17" fill="#555555">Университет</text>
      <text x="528" y="1596" class="s19" fill="#555555">Юго-Западная</text>
      <text x="529" y="1646" class="s196" fill="#555555">Тропарёво</text>
      <text x="528" y="1696" class="s199" fill="#555555">Румянцево</text>
      <text x="529" y="1746" class="s200" fill="#555555">Саларьево</text>
      <text x="531" y="422" class="s20" fill="#555555">Речной</text>
      <text x="531" y="435" class="s20" fill="#555555">вокзал</text>
      <text x="528" y="681" class="s23" fill="#555555">Сокол</text>
      <text x="531" y="483" class="s21" fill="#555555">Водный</text>
      <text x="531" y="496" class="s21" fill="#555555">стадион</text>
      <text x="544" y="711" class="s24" fill="#555555">Аэропорт</text>
      <text x="594" y="763" class="s25" fill="#555555">Динамо</text>
      <text x="722" y="883" class="s27" fill="#555555">Маяковская</text>
      <text x="892" y="1062" class="s29" fill="#555555">Театральная</text>
      <text x="988" y="1384" class="s32 s215" fill="#555555">Автозаводская</text>
      <text x="987" y="1469" class="s198 uc" fill="#999999">Технопарк</text>
      <text x="987" y="1508" class="s33 uc" fill="#999999">Коломенская</text>
      <text x="987" y="1578" class="s34 s181 uc" fill="#999999">Каширская</text>
      <text x="1010" y="1625" class="s35 uc" fill="#999999">Кантемировская</text>
      <text x="1060" y="1672" class="s36 uc" fill="#999999">Царицыно</text>
      <text x="1113" y="1729" class="s37" fill="#555555">Орехово</text>
      <text x="1167" y="1781" class="s38" fill="#555555">Домодедовская</text>
      <text x="1280" y="1889" class="s187" fill="#555555">Алма-Атинская</text>
      <text x="221" y="423" class="s40" fill="#555555">Митино</text>
      <text x="221" y="578" class="s42" fill="#555555">Мякинино</text>
      <text x="221" y="653" class="s43" fill="#555555">Строгино</text>
      <text x="221" y="727" class="s44" fill="#555555">Крылатское</text>
      <text x="221" y="802" class="s45" fill="#555555">Молодёжная</text>
      <text x="624" y="1068" class="s50" fill="#555555">Смоленская</text>
      <text x="762" y="1069" class="s51" fill="#555555">Арбатская</text>
      <text x="1158" y="978" class="s53 s80 s306" fill="#555555">Курская</text>
      <text x="1201" y="938" class="s54" fill="#555555" >Бауманская</text>
      <text x="1256" y="873" class="station" fill="#555555">Электрозаводская</text> 
      <text x="1316" y="824" class="s56" fill="#555555">Семёновская</text>
      <text x="1364" y="777" class="s57" fill="#555555">Партизанская</text>
      <text x="1414" y="728" class="s58" fill="#555555">Измайловская</text>
      <text x="1434" y="680" class="s59" fill="#555555">Первомайская</text>
      <text x="1434" y="603" class="s60" fill="#555555">Щёлковская</text>
      <text x="724" y="1044" class="s72" fill="#555555">Арбатская</text>
      <text x="492" y="1027" class="s69" fill="#555555">Выставочная</text>
      <text x="624" y="1028" class="s71" fill="#555555">Смоленская</text>
      <text x="1109" y="344" class="s109" fill="#555555">Медведково</text>
      <text x="1109" y="396" class="s108" fill="#555555">Бабушкинская</text>
      <text x="1110" y="450" class="s107" fill="#555555">Свиблово</text>
      <text x="1040" y="711" class="s103 s304" fill="#555555">Рижская</text>
      <text x="1013" y="1065" class="s99 s117" fill="#555555">Китай-город</text>
      <text x="683" y="1339" class="s96" fill="#555555">Шаболовская</text>
      <text x="683" y="1461" class="s94" fill="#555555">Академическая</text>
      <text x="683" y="1505" class="s93" fill="#555555">Профсоюзная</text>
      <text x="682" y="1549" class="s92" fill="#555555">Новые Черёмушки</text>
      <text x="683" y="1598" class="s91" fill="#555555">Калужская</text>
      <text x="683" y="1675" class="s90" fill="#555555">Беляево</text>
      <text x="683" y="1719" class="s89" fill="#555555">Коньково</text>
      <text x="683" y="1763" class="s88" fill="#555555">Тёплый Стан</text>
      <text x="683" y="1808" class="s87" fill="#555555">Ясенево</text>
      <text x="693" y="1841" class="s86" fill="#555555">Новоясеневская</text>
      <text x="1109" y="507" class="s106 s227" fill="#555555">Ботанический сад</text>
      <text x="948" y="812" class="s101" fill="#555555">Сухаревская</text>
      <text x="376" y="347" class="s128" fill="#555555">Планерная</text>
      <text x="376" y="414" class="s127" fill="#555555">Сходненская</text>
      <text x="376" y="511" class="s126" fill="#555555">Тушинская</text>
      <text x="376" y="559" class="s195" fill="#555555">Спартак</text>
      <text x="376" y="640" class="s125 s329" fill="#555555">Щукинская</text>
      <text x="606" y="939" class="s120" fill="#555555">Баррикадная</text>
      <text x="778" y="939" class="s119" fill="#555555">Пушкинская</text>
      <text x="1189" y="1205" class="s115" fill="#555555">Пролетарская</text>
      <text x="1390" y="1401" class="s112" fill="#555555">Кузьминки</text>
      <text x="1431" y="1436" class="s111" fill="#555555">Рязанский</text>
      <text x="1431" y="1448" class="s111" fill="#555555">проспект</text>
      <text x="1456" y="1490" class="s110" fill="#555555">Выхино</text>
      <text x="457" y="823" class="s123" fill="#555555">Полежаевская</text>
      <text x="1446" y="978" class="s131" fill="#555555">Перово</text>
      <text x="1251" y="979" class="s133 s268" fill="#555555">Авиамоторная</text>
      <text x="1189" y="1143" class="s134" fill="#555555">Площадь Ильича</text>
      <text x="376" y="1292" class="s240" fill="#555555">Минская</text>
      <text x="377" y="1346" class="s241" fill="#555555">Ломоносовский</text>
      <text x="377" y="1359" class="s241" fill="#555555">проспект</text>
      <text x="376" y="1410" class="s242" fill="#555555">Раменки</text>
      <text x="956" y="287" class="s161" fill="#555555">Алтуфьево</text>
      <text x="955" y="343" class="s160" fill="#555555">Бибирево</text>
      <text x="956" y="399" class="s159" fill="#555555">Отрадное</text>
      <text x="928" y="450" class="s158 s228" fill="#555555">Владыкино</text>
      <text x="799" y="654" class="s154 s255 s282" fill="#555555">Савёловская</text>
      <text x="834" y="978" class="s151" fill="#555555">Чеховская</text>
      <text x="834" y="1260" class="s149" fill="#555555">Полянка</text>
      <text x="834" y="1320" class="s148" fill="#555555">Серпуховская</text>
      <text x="835" y="1367" class="s147" fill="#555555">Тульская</text>
      <text x="834" y="1482" class="s146" fill="#555555">Нагатинская</text>
      <text x="834" y="1517" class="s145" fill="#555555">Нагорная</text>
      <text x="834" y="1663" class="s143" fill="#555555">Севастопольская</text>
      <text x="834" y="1704" class="s142" fill="#555555">Чертановская</text>
      <text x="834" y="1745" class="s141" fill="#555555">Южная</text>
      <text x="834" y="1786" class="s140" fill="#555555">Пражская</text>
      <text x="835" y="1891" class="s138" fill="#555555">Аннино</text>
      <text x="821" y="498" class="s234 s157" fill="#555555">Петровско-Разумовская</text>
      <text x="869" y="537" class="s233" fill="#555555">Фонвизинская</text>
      <text x="908" y="576" class="s232" fill="#555555">Бутырская</text>
      <text x="922" y="647" class="s178" fill="#555555">Марьина Роща</text>
      <text x="856" y="817" class="s176" fill="#555555">Трубная</text>
      <text x="1238" y="1426" class="s169" fill="#555555">Печатники</text>
      <text x="1281" y="1497" class="s168" fill="#555555">Волжская</text>
      <text x="1281" y="1544" class="s167" fill="#555555">Люблино</text>
      <text x="1281" y="1591" class="s166" fill="#555555">Братиславская</text>
      <text x="1281" y="1638" class="s165" fill="#555555">Марьино</text>
      <text x="1281" y="1685" class="s164" fill="#555555">Борисово</text>
      <text x="1281" y="1732" class="s163" fill="#555555">Шипиловская</text>
      <text x="550" y="795" class="s238" fill="#555555">ЦСКА</text>
      <text x="596" y="742" class="s239" fill="#555555">Петровский парк</text>
      <text x="850" y="1620" class="s180 uc" fill="#999999">Варшавская</text>
      <text x="253" y="1019" class="s62" fill="#555555">Пионерская</text>
      <text x="220" y="941" class="s46 s61 s344" fill="#555555">Кунцевская</text>
      <text x="636" y="2057" class="s185" fill="#555555">Улица</text>
      <text x="636" y="2070" class="s185" fill="#555555">Горчакова</text>
      <text x="747" y="2056" class="s184" fill="#555555">Бульвар</text>
      <text x="747" y="2069" class="s184" fill="#555555">Адмирала Ушакова</text>
      <text x="517" y="2058" class="s186" fill="#555555">Бунинская</text>
      <text x="517" y="2071" class="s186" fill="#555555">аллея</text>
      <text x="221" y="347" class="s188" fill="#555555">Пятницкое</text>
      <text x="221" y="360" class="s188" fill="#555555">Шоссе</text>
      <text x="261" y="1059" class="s63" fill="#555555">Филёвский парк</text>
      <text x="839" y="1942" class="s137" fill="#555555">Бульвар</text>
      <text x="839" y="1955" class="s137" fill="#555555">Дмитрия</text>
      <text x="839" y="1968" class="s137" fill="#555555">Донского</text>
      <text x="376" y="1225" class="s48 s194" fill="#555555">Парк</text>
      <text x="376" y="1239" class="s48 s194" fill="#555555">Победы</text>
      <text x="834" y="1557" class="s144" fill="#555555">Нахимовский</text>
      <text x="834" y="1570" class="s144" fill="#555555">проспект</text>
      <text x="683" y="1382" class="s95" fill="#555555">Ленинский проспект</text>
      <text x="1378" y="944" class="s132 s221" fill="#555555">Шоссе Энтузиастов</text>
      <text x="375" y="734" class="s124" fill="#555555">Октябрьское Поле</text>
      <text x="531" y="287" class="s243" fill="#555555">Ховрино</text>
      <text x="376" y="1611" class="s249" fill="#555555">Говорово</text>
      <text x="376" y="1663" class="s250" fill="#555555">Солнцево</text>
      <text x="376" y="1720" class="s251" fill="#555555">Боровское шоссе</text>
      <text x="376" y="1787" class="s252" fill="#555555">Новопеределкино</text>
      <text x="376" y="1865" class="s253" fill="#555555">Рассказовка</text>
      <text x="376" y="1562" class="s248" fill="#555555">Озёрная</text>
      <text x="530" y="370" class="s254" fill="#555555">Беломорская</text>
      <text x="1476" y="1540" class="s256" fill="#555555">Косино</text>
      <text x="1477" y="1722" class="s257" fill="#555555">Улица</text>
      <text x="1477" y="1735" class="s257" fill="#555555">Дмитриевского</text>
      <text x="1477" y="1791" class="s258" fill="#555555">Лухмановская</text>
      <text x="1476" y="1848" class="s259" fill="#555555">Некрасовка</text>
      <text x="1419" y="1332" class="s266" fill="#555555">Окская</text>
      <text x="1419" y="1247" class="s265" fill="#555555">Стахановская</text>
      <text x="529" y="1811" class="s260" fill="#555555">Филатов Луг</text>
      <text x="528" y="1861" class="s261" fill="#555555">Прокшино</text>
      <text x="523" y="1970" class="s263" fill="#555555">Коммунарка</text>
      <text x="646" y="636" class="s302" fill="#555555">Гражданская</text>

      <text x="1218" y="1039" class="s307" fill="#555555">Москва-</text>
      <text x="1218" y="1052" class="s307" fill="#555555">Товарная</text>
      <text x="1255" y="1088" class="s308" fill="#555555">Калитники</text>
      <text x="1250" y="917" class="s269" fill="#555555">Лефортово</text>
      <text x="1228" y="1242" class="s114" fill="#555555">Волгоградский проспект</text>
      <text x="1369" y="887" class="s222" fill="#555555">Соколиная Гора</text>
      <text x="835" y="1825" class="s139" fill="#555555">Улица</text>
      <text x="835" y="1838" class="s139" fill="#555555">Академика</text>
      <text x="835" y="1851" class="s139" fill="#555555">Янгеля</text>
      <text x="528" y="1913" class="s262" fill="#555555">О</text>
      <text x="537" y="1913" class="s262" fill="#555555">льховая</text>
      <text x="531" y="642" class="s22" fill="#555555">Войковская</text>
      <text x="1210" y="582" class="s225" fill="#555555">Белокаменная</text>
      <text x="599" y="978" class="s85" fill="#555555">Краснопресненская</text>
      <text x="803" y="447" class="s229 s284" fill="#555555">Окружная</text>
      <text x="651" y="527" class="s202" fill="#555555">Коптево</text>
      <text x="783" y="1119" class="s73" fill="#555555">Александровский сад</text>
      <text x="573" y="573" class="s203" fill="#555555">Балтийская</text>
      <text x="410" y="1099" class="s68" fill="#555555">Международная</text>
      <text x="196" y="1235" class="s343" fill="#555555">Давыдково</text>
      <text x="219" y="904" class="s345" fill="#555555">Терехово</text>
      </g>
    <g text-anchor="end" pointer-events="all">
      <g id="myicon" pointer-events="all">
        <text x="803" y="1312" class="s77" fill="#555555">Добрынинская</text>
          <text x="403" y="1163" class="s66 s231" fill="#555555">Кутузовская</text>
          <text x="644" y="1409" class="s211" fill="#555555">Площадь</text>
          <text x="805" y="558" class="s156 s283" fill="#555555">Тимирязевская</text>
          <text x="806" y="600" class="s155 s303" fill="#555555">Дмитровская</text>
          <text x="498" y="657" class="s204" fill="#555555">Стрешнево</text>
          <text x="644" y="1422" class="s211" fill="#555555">Гагарина</text>
          <text x="673" y="1887" class="s191" fill="#555555">Битцевский парк</text>
          <text x="786" y="1958" class="s182" fill="#555555">Улица Старокачаловская</text>
          <text x="684" y="839" class="s84 s26 s281" fill="#555555">Белорусская</text>
          <text x="623" y="1186" class="s75 s13" fill="#555555">Парк</text>
          <text x="623" y="1199" class="s75 s13" fill="#555555">культуры</text>
          <text x="697" y="1266" class="s76 s97" fill="#555555">Октябрьская</text>
        <text x="1307" y="771" class="s223" fill="#555555">Измайлово</text>
        <text x="382" y="809" class="s206" fill="#555555">Зорге</text>
        <text x="373" y="844" class="s207" fill="#555555">Хорошёво</text>
        <text x="870" y="1024" class="s10" fill="#555555">Охотный</text>
        <text x="870" y="1037" class="s10" fill="#555555">ряд</text>
        <text x="783" y="989" class="s28" fill="#555555">Тверская</text>
        <text x="569" y="1068" class="s49 s74 s70" fill="#555555">Киевская</text>
        <text x="969" y="902" class="s100" fill="#555555">Тургеневская</text>
        <text x="923" y="1201" class="s98 s136" fill="#555555">Третьяковская</text>
        <text x="995" y="1002" class="s118" fill="#555555">Кузнецкий Мост</text>
        <text x="807" y="817" class="s152" fill="#555555">Цветной бульвар</text>
        <text x="725" y="1109" class="s150" fill="#555555">Боровицкая</text>
        <text x="1128" y="1022" class="s174" fill="#555555">Чкаловская</text>
        <text x="1160" y="1238" class="s172" fill="#555555">Крестьянская</text>
        <text x="1160" y="1251" class="s172" fill="#555555">Застава</text>
        <text x="1035" y="849" class="s175" fill="#555555">Сретенский</text>
        <text x="1035" y="862" class="s175" fill="#555555">бульвар</text>
        <text x="1160" y="1103" class="s173" fill="#555555">Римская</text>
        <text x="803" y="1617" class="s179" fill="#555555">Каховская</text>
        <text x="1146" y="1146" class="s79 s116" fill="#555555">Таганская</text>
        <text x="734" y="468" class="s201" fill="#555555">Лихоборы</text>
        <text x="714" y="338" class="s245" fill="#555555">Верхние</text>
        <text x="714" y="351" class="s245" fill="#555555">Лихоборы</text>
        <text x="713" y="287" class="s244" fill="#555555">Селигерская</text>
        <text x="1429" y="1555" class="s190" fill="#555555">Лермонтовский</text>
        <text x="1429" y="1568" class="s190" fill="#555555">проспект</text>
        <text x="1390" y="1472" class="s267" fill="#555555">Юго-Восточная</text>
        <text x="713" y="402" class="s246" fill="#555555">Окружная</text>
        <text x="1428" y="1609" class="s189" fill="#555555">Жулебино</text>
        <text x="1429" y="1657" class="s197" fill="#555555">Котельники</text>
        <text x="784" y="1911" class="s192" fill="#555555">Лесопарковая</text>
        <text x="785" y="2003" class="s183" fill="#555555">Улица Скобелевская</text>
        <text x="223" y="1165" class="s47 s277" fill="#555555">Славянский</text>
        <text x="223" y="1178" class="s47 s277" fill="#555555">бульвар</text>
        <text x="265" y="1096" class="s64" fill="#555555">Багратионовская</text>
        <text x="1137" y="1350" class="s171 s216" fill="#555555">Дубровка</text>
        <text x="553" y="951" class="s121" fill="#555555">Улица</text>
        <text x="553" y="964" class="s121" fill="#555555">1905 года</text>
        <text x="939" y="754" class="s82 s102" fill="#555555">Проспект</text>
        <text x="939" y="767" class="s82 s102" fill="#555555">Мира</text>
        <text x="809" y="724" class="s83" fill="#555555">Новослободская</text>
        <text x="957" y="1423" class="s214" fill="#555555">ЗИЛ</text>
        <text x="1231" y="667" class="s2" fill="#555555">Черкизовская</text>
        <text x="956" y="943" class="s9" fill="#555555">Лубянка</text>
        <text x="575" y="1247" class="s14" fill="#555555">Фрунзенская</text>
        <text x="1307" y="1367" class="s113 s310" fill="#555555">Текстильщики</text>
        <text x="1111" y="1196" class="s135" fill="#555555">Марксистская</text>
        <text x="808" y="763" class="s153" fill="#555555">Менделеевская</text>
        <text x="1184" y="1414" class="s170" fill="#555555">Кожуховская</text>
        <text x="1189" y="1853" class="s162" fill="#555555">Зябликово</text>
        <text x="1079" y="561" class="s105" fill="#555555" onclick="#openModal">ВДНХ</text>
        <text x="1081" y="608" class="s104" fill="#555555">Алексеевская</text>
        <text x="385" y="1097" class="s209" fill="#555555">Деловой</text>
        <text x="385" y="1108" class="s209" fill="#555555">центр</text>
        <text x="365" y="882" class="s331" fill="#555555">Народное</text>
        <text x="365" y="895" class="s331" fill="#555555">Ополчение</text>
        <text x="291" y="853" class="s332" fill="#555555">Мнёвники</text>
        <text x="757" y="1652" class="s342" fill="#555555">Зюзино</text>
        <text x="629" y="1621" class="s341" fill="#555555">Воронцовская</text>
        <text x="493" y="1528" class="s18 s339" fill="#555555">Проспект</text>
        <text x="493" y="1539" class="s18 s339" fill="#555555">Вернадского</text>
        <text x="626" y="1542" class="s340" fill="#555555">Новаторская</text>
        <text x="342" y="1466" class="s247 s338" fill="#555555">Мичуринский</text>
        <text x="342" y="1479" class="s247 s338" fill="#555555">проспект</text>
        <text x="270" y="1370" class="s337" fill="#555555">Аминьевская</text>
      </g>
    </g>
  </g>
</g>
</svg>
</div>
        </section>
        <!-- Testimonials section-->
        <section class="py-5 border-bottom">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Факты о Московском метро</h2>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-7">
                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1">«Воробьёвы горы» — самая длинная станция московского метрополитена. Длина платформы составляет 284 метра. Чтобы пройти ее от начала до конца, придётся потратить 4 минуты.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body p-4" style="margin-top:10px;">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1">Станция «Выхино» самая загруженная станция московского метрополитена, благодаря чему появился так называемый «Эффект Выхино». Он заключается в том, что поезда на станции в час пик заполняются настолько, что на следующих станциях, вплоть до пересадки на Кольцевую линию, поместиться в вагоны другим пассажирам невозможно.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1">В 1940 году на станции Московского метро «Динамо» по ночам работали учёные-физики. Расположенная на 40-метровой глубине станция отлично была защищена от радиоволн, что, собственно, им и требовалось.</p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
       
        <!-- Footer-->
        <footer class="py-5 bg-dark">
        <div class="container px-5"><p class="m-0 text-center text-white">Сайт создан на основе открытых данных г. Москва</p></div>
        <div class="container px-5"><p class="m-0 text-center text-white"> <a href="https://data.mos.ru/opendata/7704786030-passajiropotok-po-stantsiyam-moskovskogo-metropolitena">Пассажиропоток по станциям Московского метрополитена
                        </a> </p></div>
        <div class="container px-5"><p class="m-0 text-center text-white"><a href ="https://data.mos.ru/opendata/7704786030-passajiropotok-po-marshrutam-nazemnogo-gorodskogo-passajirskogo-transporta?pageNumber=280&versionNumber=1&releaseNumber=1"> Пассажиропоток по маршрутам наземного городского пассажирского транспорта
                        </a> </p> </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
