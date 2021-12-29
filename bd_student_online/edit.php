

<html>
<head>
<title> Редактирование данных о студенте </title>
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
 $rows=mysqli_query($linkmy, "SELECT id_stud, stud_FIO, stud_faculty,
stud_gr, stud_no_zk, stud_no_tel FROM stud WHERE 
id_stud=".$_GET['id']);

 while ($st = mysqli_fetch_array($rows)) {
 $id=$_GET['id'];
 $FIO = $st['stud_FIO'];
 $faculty = $st['stud_faculty'];
 $gr = $st['stud_gr'];
 $no_zk = $st['stud_no_zk'];
 $no_tel = $st['stud_no_tel'];
 }
print "<form action='save_edit.php' metod='get'>";
print "ФИО: <input name='FIO' size='50' type='text'
value='".$FIO."'>";
print "<br>Факультет: <input name='faculty' size='20' type='text'
value='".$faculty."'>";
print "<br>Группа: <input name='gr' size='20' type='text'
value='".$gr."'>";
print "<br>Номер зачетной книжки: <input name='no_zk' size='30' type='text'
value='".$no_zk."'>";
print "<br>Номер телефона <input name='no_tel' size='16' type='text'
value='".$no_tel."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку
студентов </a>";
?>
</body>
</html>
