
<html> <body>
<?php
require "isUser.php";
 $linkmy=mysqli_connect("localhost","root","") or die ("Невозможно
подключиться к серверу");
 mysqli_query($linkmy, 'SET NAMES utf8');
 mysqli_select_db($linkmy, "students") or die("Нет такой таблицы!");
 $zapros="UPDATE stud SET stud_FIO='".$_GET['FIO'].
"', stud_faculty='".$_GET['faculty']."', stud_gr='"
.$_GET['gr']."', stud_no_zk='".$_GET['no_zk'].
"', stud_no_tel='".$_GET['no_tel']."' WHERE id_stud="
.$_GET['id'];
 mysqli_query($linkmy, $zapros);
 if (mysqli_affected_rows($linkmy)>0) {
 echo 'Все сохранено. <a href="index.php"> Вернуться к списку
пользователей </a>'; }
 else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться к списку пользователей</a> '; }
?>
</body> </html>