
<?php
require "isAdmin.php";
$linkmy=mysqli_connect("localhost","root") or die ("Невозможно
подключиться к серверу");
 mysqli_select_db($linkmy, "students") or die("Нет такой таблицы!");
 $zapros="DELETE FROM users WHERE id=" . $_GET['id'];
 mysqli_query($linkmy,$zapros);
 header("Location: index.php");
 exit;
?>