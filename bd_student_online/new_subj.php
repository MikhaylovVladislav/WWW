<?php
require "isUser.php";
require "connectToDB.php";
?>
<html>
<head> <title> Добавление нового предмета </title> 
 <meta charset="utf-8">
</head>
<body>
<H2>Регистрация на сайте:</H2>
<form action="save_new_subj.php" metod="get">
 Название: <input name="name" size="20" type="text">
<br>ФИО препода: <input name="fio_prepod" size="50" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться к списку студентов </a>
</body>
</html>