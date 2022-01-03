<html> <body>
<?php
require "isUser.php";
require "connectToDB.php";

 mysqli_query($linkmy, 'SET NAMES utf8');

 $zapros="UPDATE zachved SET zv_data='".$_GET['data'].
"', id_stud='".$_GET['id_stud']."', id_subj='"
.$_GET['id_subj']."', zv_grade='".$_GET['grade']."', zv_npp='".$_GET['npp'].
"' WHERE id_zachved=".$_GET['id'];
 mysqli_query($linkmy, $zapros);
 if (mysqli_affected_rows($linkmy)>0) {
 echo 'Все сохранено. <a href="index.php"> Вернуться к списку
таблиц </a>'; }
 else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться к списку таблиц</a> '; }
?>
</body> </html>