<?php
require "isUser.php";
require "connectToDB.php";
?>
<html>
<head> <title> Добавление нового студента </title> 
 <meta charset="utf-8">
</head>
<body>
<H2>Регистрация на сайте:</H2>
<form action="save_new.php" metod="get">
 ФИО: <input name="FIO" size="50" type="text">
<br>Факультет: <input name="faculty" size="20" type="text">
<br>Группа: <input name="gr" size="20" type="text">
<br>Номер зачетной книжки: <input name="no_zk" size="30" type="text">
<br>Номер телефона: <input name="no_tel" size="16">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться к списку студентов </a>
</body>
</html>
