<html> <body>
<?php
 define ("HOST", "localhost");
define ("USER", "f0593353_root");
define ("PASS", "12345");
define ("DB", "f0593353_students");
 
 $linkmy = @mysqli_connect(HOST, USER, PASS, DB) or die ('Не получилось из-за @mysqli_connect :(');
 mysqli_query($linkmy, 'SET NAMES utf8');
 mysqli_select_db($linkmy, "f0593353_students") or die("Нет такой таблицы!");
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