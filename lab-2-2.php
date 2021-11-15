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

echo '<br><br><br><br> Лабораторная работа №2: '.'<br>';
echo '<br>';

$ra=rand(3, 20);

for($i=1;$i<=$ra;$i++){
	$rb=rand(10, 99);
$arrA_B[$i]=$rb;
}

$arrABstr=implode(" ",$arrA_B);
echo 'Массив из '."$ra".' элементов, заполненный случайными числами: '."$arrABstr"; 
echo '<br>';

$arrAB=$arrA_B;
sort($arrAB);
$arrABstr=implode(" ",$arrAB);
echo '<br>' . 'Отсортированнай массив (по возрастанию): '."$arrABstr"; 
echo '<br>';

$arrBA=array_reverse($arrAB);
$arrABstr=implode(" ",$arrBA);
echo '<br>' . 'Отсортированнай массив (по убыванию): '."$arrABstr"; 
echo '<br>';

$arrA=$arrA_B;
array_pop($arrA);
$arrABstr=implode(" ",$arrA);
echo '<br>' . 'Первоначальный массив без последнего элемента: '."$arrABstr"; 
echo '<br>';

foreach ($arrA_B as $value){
$arrSum+=$value;
}
$KolInArr=count($arrA_B);
echo '<br>' . 'Сумма элементов первоначального массива = '."$arrSum".', а количество элементов в массиве = '."$KolInArr"; 
echo '<br>';

$SrArifArr=$arrSum/$KolInArr;
echo '<br>' . 'Среднее арифиметическое первоначального массива: '."$SrArifArr"; 
echo '<br>';

if (in_array(50, $arrA_B)){
echo '<br>' . 'В первоначалном массиве присутствует число 50'; 
}else {
echo '<br>' . 'В первоначалном массиве отсутствует число 50'; 
}
echo '<br>';

$arrABunique=array_unique($arrA_B);
$arrABstr=implode(" ",$arrABunique);
echo '<br>' . 'Массив без повторяющихся чисел: '."$arrABstr"; 
echo '<br>';
?>

