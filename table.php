<?php
include "db_connect.php";
// Выводим результат из БД
$sql = mysqli_query($connect, 'SELECT Name, AdmArea, District FROM `ATTRACTIONS`');
  while ($result = mysqli_fetch_array($sql)) {
	echo '<tr>'.'<td>' .$result['Name'].'</td>'.'<td>'. $result['AdmArea'].'</td>'. '<td>'. $result['District'].'</td>'.'</tr>';
  }
?>