<?php
echo 'Вариант 13 ';
echo '<br>';

$n = rand(1, 50);

for($i=1;$i<$n;$i++){
$arrNum[$i]=rand(-5000, 5000);

}

foreach ($arrNum as $value){
	if ($value<0 and !($value%2===0)){
$SumArr+=$value;
	}
}	

$arrNumStr=implode(" ", $arrNum);
echo 'Целочисленный массив из '."$n". ' элементов: '."$arrNumStr";
echo '<br>';
echo 'Сумма нечетных отрицательных значений массива = '."$SumArr";
echo '<br>';
?>