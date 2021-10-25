<?php
$n = rand(0, 500);
$isFind= false;
$isFindRepeat = false;
$arrayRepeat = array();
for ($a=1; $a<=23; $a++){ 
	for ($b=1; $b<=23; $b++){
		$p=($a*$a)+($b*$b);
		if($p==$n) {
			foreach ($arrayRepeat as $ar){
			if (($ar == $a) or ($ar == $b)){
			$isFindRepeat = true;
			break;
			} else {
				
				$isFindRepeat = false;
		}
		} 
		if ($isFindRepeat==false){
			$arrayRepeat [] = $a;
			$arrayRepeat [] = $b;
			echo "Число " . $n . " является суммой квадратов " . $a . " и " . $b . "<br>" ;
			$isFind=true;
		}
		
	}
}
}
if ($isFind==false){
	echo "Число " . $n . " не имеет представлений в видe суммы квадратов";
}
?>