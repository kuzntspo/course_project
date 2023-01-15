<?php
include "db_connect.php";
// Выводим результат из БД
$sql = mysqli_query($connect, 'SELECT Name FROM `ATTRACTIONS`');
  while ($result = mysqli_fetch_array($sql)) {
	echo '<ul>'.'<li>' .$result['Name'].'</ul>'.'<li>';
  }
?>