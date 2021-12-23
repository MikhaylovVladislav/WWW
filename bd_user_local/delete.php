<?php
$linkmy=mysqli_connect("localhost","root") or die ("Невозможно
подключиться к серверу");
 mysqli_select_db($linkmy, "users") or die("Нет такой таблицы!");
 $zapros="DELETE FROM user WHERE id_user=" . $_GET['id'];
 mysqli_query($linkmy,$zapros);
 header("Location: index.php");
 exit;
?>