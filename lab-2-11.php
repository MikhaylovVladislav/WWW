<?php
$n = rand(0, 500);
$isFind= false;
$c = 0;
$d = 0;
for ($a=1; $a<=23; $a++){
	for ($b=1; $b<=23; $b++){
		$p=($a*$a)+($b*$b);
		if($p==$n and ($a!==$d and $b!=$c)){
			$c = $a;
			$d = $b;
			echo "Число " . $n . " является суммой квадратов " . $a . " и " . $b . "<br>" ;
			$isFind=true;
		}
	}
}
if (isFind==false){
	echo "Число " . $n . " не имеет представлений в видe суммы квадратов";
}
?>