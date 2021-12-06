<HTML>
<HEAD> <TITLE> Михайлов Владислав </TITLE>
  <meta charset="utf-8">
 </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 Введите число
 <INPUT type="text" name="n" id="n" size="4">
 
 <P> Вывод: <BR>
 <SELECT NAME="z" SIZE="1">
 <OPTION VALUE="1" SELECTED> Четные
 <OPTION VALUE="2"> Нечетные
 <OPTION VALUE="3"> Простые
  <OPTION VALUE="4"> Составные
 </SELECT>
 <p>
 
 <P> <INPUT type="submit" name="obr" value="Вперед">
</FORM>

<?php
if (is_numeric($_POST["n"])) {

echo "Обработка числа ". $_POST["n"] . "<br>";

switch ($_POST["z"]) {
 // смотрим, чему равна переменная $z
 case 1: // четные
 
 for ($i=0;$i<$_POST["n"]+1;$i++){
 if($i % 2 === 0)
  echo "$i". " ";
 }
 
 break; 
  case 2: // нечетные
 for ($i=0;$i<$_POST["n"]+1;$i++){
 if($i % 2 === 0){
 }else{
	   echo "$i". " ";
 }
 }
 break;
 case 3: // простые
 
 for ($i=1;$i<$_POST["n"]+1;$i++){
	 $k=0;
	 $str="";
	 for($j=1;$j<$i;$j++){
 if(is_int($i/$j) and $k<2){
	 $k++;
	
	 $str=$str . "$i". " ";
	 
 }elseif($k>1){
	 
	 $str="";
	 break;
 }
	
 }
 if ($k==1 and k < 2){
	  echo "$str". " ";  
 }}

 break;
 case 4: // составные
for ($i=1;$i<$_POST["n"]+1;$i++){
	 $k=0;
	 $str="";
	 for($j=1;$j<$i;$j++){
 if(is_int($i/$j) and $k<2){
	 $k++;
	 if(is_int($i/$j) and $k>1){
	 $str=$str . "$i". " ";
	 }
 }elseif($k>2){
	 
	 $str="";
	 break;
 }
	
 }
 if ($k==2){
	  echo "$str". " ";  
 }}
 break;
}
echo $s;
}
?>
</BODY> </HTML>