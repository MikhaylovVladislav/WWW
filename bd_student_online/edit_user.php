

<html>
<head>
<title> Редактирование данных о студенте </title>
  <meta charset="utf-8">
</head>
<body>

<?php
require "isAdmin.php";
$title="Форма регистрации"; // название формы
require "Autorization/db.php"; // подключаем файл для соединения с БД



 $linkmy=mysqli_connect("localhost","root") or die ("Невозможно
подключиться к серверу");
 mysqli_query($linkmy, 'SET NAMES utf8');
 mysqli_select_db($linkmy, "students") or die("Нет такой таблицы!");
 $rows=mysqli_query($linkmy, "SELECT * FROM users WHERE 
id=".$_GET['id']);

 while ($st = mysqli_fetch_array($rows)) {
 $id=$_GET['id'];
 $login = $st['login'];
 $password = $st['password'];
 $type = $st['type'];
 }
print "<form action='save_edit_user.php' metod='get'>";
print "Логин: <input name='login' size='50' type='text'
value='".$login."' min='4' max='20'>";
print "<br>Пароль: <input name='password' size='20' type='password'
>";
print "<br>Пароль: <input name='password2' size='20' type='password'
>";
print "<br>Тип доступа: <input name='type' size='20' type='text'
value='".$type."'>";

print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='save' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку
таблиц </a>";

// Создаем переменную для сбора данных от пользователя по методу POST
$data = $_GET;
// Пользователь нажимает на кнопку "Зарегистрировать" и код начинает выполняться



//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

 
?>


