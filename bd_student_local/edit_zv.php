
<html>
<head>
<title> Редактирование ведомости </title>
  <meta charset="utf-8">
</head>
<body>

<?php

require "isUser.php";
//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 $linkmy=mysqli_connect("localhost","root") or die ("Невозможно
подключиться к серверу");
 mysqli_query($linkmy, 'SET NAMES utf8');
 mysqli_select_db($linkmy, "students") or die("Нет такой таблицы!");
 $rows=mysqli_query($linkmy, "SELECT id_zachved, zv_data, id_stud, id_subj, zv_grade, zv_npp FROM zachved WHERE 
id_zachved=".$_GET['id']);

 while ($st = mysqli_fetch_array($rows)) {
 $id=$_GET['id'];
 $data = $st['zv_data'];
 $stud = $st['id_stud'];
 $subj = $st['id_subj'];
 $grade = $st['zv_grade'];
 $npp = $st['zv_npp'];
 }
print "<form action='save_edit_zv.php' metod='get'>";
print "Дата: <input name='data' size='20' type='date'
value='".$data."'>";
print "<br>Ид студента: <input name='stud' size='20' type='text'
value='".$stud."'>";
print "<br>Ид предмета: <input name='subj' size='20' type='text'
value='".$subj."'>";
print "<br>Оценка: <input name='grade' size='5' type='text' min='2' max='5'
value='".$grade."'>";
print "<br>НПП: <input name='npp' size='5' type='number' min='1' max='10'
value='".$npp."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку
таблиц </a>";
?>

</body>
</html>
