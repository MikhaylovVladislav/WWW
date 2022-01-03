<?php
require "isUser.php";
 // Подключение к базе данных:
 $linkmy=mysqli_connect("localhost","root","") or die ("Невозможно
подключиться к серверу");
 mysqli_query($linkmy, 'SET NAMES utf8'); // Тип кодировки
 mysqli_select_db($linkmy, "students") or die("Нет такой таблицы!");
 // Строка запроса на добавление записи в таблицу:
 $sql_add = "INSERT INTO zachved SET zv_data='" . $_GET['data']
."', id_stud='".$_GET['id_stud']."', id_subj='"
.$_GET['id_subj']."', zv_grade='".$_GET['grade'].
"'";
 mysqli_query($linkmy, $sql_add); // Выполнение запроса
 if (mysqli_affected_rows($linkmy)>0) // если нет ошибок при выполнении запроса
 { print "<p>Успешно сохраненно.";
 print "<p><a href=\"index.php\"> Вернуться к списку
таблиц </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку таблиц </a>"; }
?>
