
<html> <body>
<?php
require "isUser.php";
 $linkmy=mysqli_connect("localhost","root","") or die ("Невозможно
подключиться к серверу");
 mysqli_query($linkmy, 'SET NAMES utf8');
 mysqli_select_db($linkmy, "students") or die("Нет такой таблицы!");
 $zapros="UPDATE subject SET subj_name='".$_GET['name'].
"', subj_fio_prepod='".$_GET['fio_prepod']."' WHERE id_subj="
.$_GET['id'];
 mysqli_query($linkmy, $zapros);
 if (mysqli_affected_rows($linkmy)>0) {
 echo 'Все сохранено. <a href="index.php"> Вернуться к списку
Таблиц </a>'; }
 else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться к списку Таблиц</a> '; }
?>
</body> </html>