<?php
$a=-1;
$b="";
if ($a) {
     echo '$a=' . "$a - истина<br>";
	 }else {
		 echo '$a=' . "$a - ложь<br>";
	 }
if ($b) {
	 echo '$b=' . "$b - истина<br>";
     }else {
		 echo '$b=' . "$b - ложь<br>";
	 }
	 
echo "Лабораторная работа №2:" . '<br>';

echo 'Массив $treug: ';

for ($n=1;$n<=10;$n++){
	$treug[$n]=($n*($n+1))/2; //Массив с 1
	echo "$treug[$n]" . " ";
}
?>
	
