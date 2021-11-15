<?php

function echoZadanie($str){
echo "$str";
return $str;
}

function Create2MernArrInRange($m,$n,$d){
	for($i=1;$i<=$m;$i++){
		for ($j=1;$j<=$n;$j++){
		$rm=rand(-($d),$d);
	$arr[$i][$j]= $rm;
		}
	}
return $arr;
}

function CreateTable($arr1){
	echo "<table border=1><tr><td>";
echo "<table>";
foreach ($arr1[1] as $value){
    echo "<tr><td>".$value."</td></tr>";
}

echo "</table></td><td><table>";
foreach ($arr1[2] as $value){
    echo "<tr><td>".$value."</td></tr>";
}
echo  "</table></td></table";
}

function Sum($arr2,$a,$b,$k){
 for ($i=0; $i<$a; $i++) 
 { for ($j=0; $j<$b; $j++){
    if ($i-$j==$k){
			 $sumr +=$arr2[$i][$j]; 
			 }
     }
 }
  
echo '<br> Сумма элементов массива с разностью '."$k".' ='. "$sumr";
return $sumr;
}

?>