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
$arrA_B[$i]=$rb;
}

$arrABstr=implode(" ",$arrA_B);
echo 'Массив из '."$ra".' элементов, заполненный случайными числами: '."$arrABstr"; 

$arrAB=$arrA_B;
sort($arrAB);
$arrABstr=implode(" ",$arrAB);
echo '<br>' . 'Отсортированнай массив (по возрастанию): '."$arrABstr"; 

$arrBA=array_reverse($arrAB);
$arrABstr=implode(" ",$arrBA);
echo '<br>' . 'Отсортированнай массив (по убыванию): '."$arrABstr"; 

$arrA=$arrA_B;
array_pop($arrA);
$arrABstr=implode(" ",$arrA);
echo '<br>' . 'Первоначальный массив без последнего элемента: '."$arrABstr"; 

foreach ($arrA_B as $value){
$arrSum+=$value;
}
$KolInArr=count($arrA_B);
echo '<br>' . 'Сумма элементов первоначального массива = '."$arrSum".', а количество элементов в массиве = '."$KolInArr"; 

$SrArifArr=$arrSum/$KolInArr;
echo '<br>' . 'Среднее арифиметическое первоначального массива: '."$SrArifArr"; 
?>

