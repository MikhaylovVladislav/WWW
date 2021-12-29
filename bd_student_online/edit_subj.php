

<html>
<head>
<title> Редактирование данных о студенте </title>
  <meta charset="utf-8">
</head>
<body>

<?php

require "isUser.php";
require "connectToDB.php";

//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 
 mysqli_query($linkmy, 'SET NAMES utf8');

 $rows=mysqli_query($linkmy, "SELECT id_subj, subj_name, subj_fio_prepod FROM subject WHERE 
id_subj=".$_GET['id']);

 while ($st = mysqli_fetch_array($rows)) {
 $id=$_GET['id'];
 $name = $st['subj_name'];
 $fio_prepod = $st['subj_fio_prepod'];
 }
print "<form action='save_edit_subj.php' metod='get'>";
print "Название: <input name='name' size='20' type='text'
value='".$name."'>";
print "<br>ФИО преподавателя: <input name='fio_prepod' size='50' type='text'
value='".$fio_prepod."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку
студентов </a>";
?>
</body>
</html>
