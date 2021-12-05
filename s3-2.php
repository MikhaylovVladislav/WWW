<HTML>
<HEAD> <TITLE> Михайлов Владислав </TITLE>
  <meta charset="utf-8">
 </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 Введите числа
 <INPUT type="text" name="a" id="a" id="a" size="4">
  <INPUT type="text" name="b" id="b" id="b" size="4">
 
 <P> Действие: <BR>
 <SELECT NAME="z" SIZE="1">
 <OPTION VALUE="1" SELECTED> сложить
 <OPTION VALUE="2"> вычесть
 <OPTION VALUE="3"> умножить
  <OPTION VALUE="4"> разделить
 </SELECT>
 <p>
 
 <P> <INPUT type="submit" name="obr" value="Вперед">
</FORM>

<?php
if (is_numeric($_POST["a"]) and is_numeric($_POST["a1"])) {
}
switch ($_POST["z"]) {
 // смотрим, чему равна переменная $z
 case 1:
 $s=$_POST["a"]+$_POST["b"];
 break;
 case 2:
  $s=$_POST["a"]-$_POST["b"];
 break;
 case 3:
 $s=$_POST["a"]*$_POST["b"];
 break;
 case 4:
 $s=$_POST["a"]/$_POST["b"];
 break;
}
echo $s;
?>
</BODY> </HTML>