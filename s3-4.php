<HTML>
<HEAD> <TITLE> Михайлов Владислав </TITLE>
  <meta charset="utf-8">
 </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 Введите логин
 <INPUT type="text" name="n" id="n" size="8">
 
 
 
 <P> <INPUT type="submit" name="obr" value="Вперед">
</FORM>

<?php



switch ($_POST["n"]) {
 
 case "vlad_php": // 
echo "Здравствуйте, Михайлов Владислав Александрович". "<br>";
 break; 
 
   case "andry_php": // 
echo "Здравствуйте, Андреев Андрей Андреевич". "<br>";
 break; 
 
 case "ivan_php": // 
echo "Здравствуйте, Иванов Иван Иванович". "<br>";
 break; 
 
 case "dasha_php": // 
  echo "Здравствуйте, Спиридонова Дарья Александровна". "<br>";
 break; 
 
 default:
 echo "Такого пользователя не существует". "<br>";
}
?>
</BODY> </HTML>