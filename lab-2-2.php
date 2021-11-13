<p> Наибольшее число:
<p>
<?php
$x=rand(1, 10);
$y=rand(1, 10);
print ('$x = ' . $x . "<br>");
print ('$y = ' . $y . "<br>");
if ($x>$y)
	echo ("	Наибольшее = " . $x);
  elseif ($x<$y) echo ("Наибольшее = " . $y);
  else print ("Наибольшего нет");  

echo '<br><br> Лабораторная работа №2: '.'<br>';
$ra=rand(3, 20);

for($i=1;$i<=$ra;$i++){
	$rb=rand(10, 99);
$arrAB[$i]=$rb;
}
sort($arrAB);
$arrBA=array_reverse($arrAB);
$arrABstr=implode(" ",$arrBA);
 echo 'Массив из '."$ra".' элементов, заполненный случайными числами: '."$arrABstr"; 

?>

