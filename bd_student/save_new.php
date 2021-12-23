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
 $sql_add = "INSERT INTO stud SET stud_FIO='" . $_GET['FIO']
."', stud_faculty='".$_GET['faculty']."', stud_gr='"
.$_GET['gr']."', stud_no_zk='".$_GET['no_zk'].
"', stud_no_tel='".$_GET['no_tel']. "'";
 mysqli_query($linkmy, $sql_add); // Выполнение запроса
 if (mysqli_affected_rows($linkmy)>0) // если нет ошибок при выполнении запроса
 { print "<p>Спасибо, вы зарегистрированы в базе данных.";
 print "<p><a href=\"index.php\"> Вернуться к списку
пользователей </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку книг </a>"; }
?>
