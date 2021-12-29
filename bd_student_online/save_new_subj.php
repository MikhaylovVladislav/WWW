<?php
require "isUser.php";
require "connectToDB.php";
 // Подключение к базе данных:

 mysqli_query($linkmy, 'SET NAMES utf8'); // Тип кодировки

 // Строка запроса на добавление записи в таблицу:
 $sql_add = "INSERT INTO subject SET subj_name='" . $_GET['name']
."', subj_fio_prepod='".$_GET['fio_prepod']."'";
 mysqli_query($linkmy, $sql_add); // Выполнение запроса
 if (mysqli_affected_rows($linkmy)>0) // если нет ошибок при выполнении запроса
 { print "<p>Регистрация предмета - успешна";
 print "<p><a href=\"index.php\"> Вернуться к списку
пользователей </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку таблиц </a>"; }
?>
