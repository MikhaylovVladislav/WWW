<?php
 // Подключение к базе данных:
 define ("HOST", "localhost");
define ("USER", "f0593353_root");
define ("PASS", "12345");
define ("DB", "f0593353_students");
 
 $linkmy = @mysqli_connect(HOST, USER, PASS, DB) or die ('Не получилось из-за @mysqli_connect :(');
 mysqli_query($linkmy, 'SET NAMES utf8'); // Тип кодировки
 mysqli_select_db($linkmy, "f0593353_students") or die("Нет такой таблицы!");
 // Строка запроса на добавление записи в таблицу:
 $sql_add = "INSERT INTO zachved SET zv_data='" . $_GET['data']
."', id_stud='".$_GET['stud']."', id_subj='"
.$_GET['subj']."', zv_grade='".$_GET['grade'].
"'";
 mysqli_query($linkmy, $sql_add); // Выполнение запроса
 if (mysqli_affected_rows($linkmy)>0) // если нет ошибок при выполнении запроса
 { print "<p>Успешно сохраненно.";
 print "<p><a href=\"index.php\"> Вернуться к списку
таблиц </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку таблиц </a>"; }
?>
