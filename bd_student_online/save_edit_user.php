<html> <body>
<?php
session_start();
require "Autorization/rb.php";
require "connectToDB.php";

 $isUnique=true;


 mysqli_query($linkmy, 'SET NAMES utf8');

   
   $result=mysqli_query($linkmy, "SELECT *
FROM users WHERE id <>". $_GET['id']); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
if ($_GET['login']==$row['login'] ){
	$isUnique=false;
}
}


if (($_GET['password'])==($_GET['password2']  )){
	if (($isUnique==true)){
 
 $zapros="UPDATE users SET login='".$_GET['login'].
"', type='".$_GET['type']."', password='"
.md5($_GET['password'])."' WHERE id="
.$_GET['id'];
 mysqli_query($linkmy, $zapros);
 if (mysqli_affected_rows($linkmy)>0) {
 echo 'Все сохранено. <a href="index.php"> Вернуться к списку
пользователей </a>'; }
 else { echo 'Ошибка сохранения . <a href="index.php">
Вернуться к списку </a> '; }
}else{ echo"Ошибка сохранения (введенный логин уже существует). <a href='edit_user.php?id=" . $_GET['id']  . "'>
Вернуться к редактированию </a> "; 
}
}else{echo"Ошибка сохранения (не верно дублировали пароль). <a href='edit_user.php?id=" . $_GET['id']  . "'>
Вернуться к редактированию </a> "; 
}

?>
</body> </html>