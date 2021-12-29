<html> <body>
<?php
define ("HOST", "localhost");
define ("USER", "f0593353_root");
define ("PASS", "12345");
define ("DB", "f0593353_students");
 
 $linkmy = @mysqli_connect(HOST, USER, PASS, DB) or die ('Не получилось из-за @mysqli_connect :(');
 mysqli_query($linkmy, 'SET NAMES utf8');
 mysqli_select_db($linkmy, "f0593353_students") or die("Нет такой таблицы!");
 $zapros="UPDATE zachved SET zv_data='".$_GET['data'].
"', id_stud='".$_GET['stud']."', id_subj='"
.$_GET['subj']."', zv_grade='".$_GET['grade']."', zv_npp='".$_GET['npp'].
"' WHERE id_zachved=".$_GET['id'];
 mysqli_query($linkmy, $zapros);
 if (mysqli_affected_rows($linkmy)>0) {
 echo 'Все сохранено. <a href="index.php"> Вернуться к списку
таблиц </a>'; }
 else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться к списку таблиц</a> '; }
?>
</body> </html>