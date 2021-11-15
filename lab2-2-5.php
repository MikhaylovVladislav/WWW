<?php
$a=rand(-100, 100);
$b=rand(-100, 100);
function f($u,$t){
	if($u*$t<0.5){
	return (1+cos($t-$u))/(($u/$t)+$t*$t);
	}else if($u*$t>=0.5){
	return (sin(log($u/$t)));
	}
}

$z=pow(3, cos(f($a,$b))) + f($a+$b, $a-$b);
echo '<br>';
echo 'а= '. "$a";
echo '<br>';
echo 'b= '. "$b";
echo '<br>';
echo 'z= '. "$z";
?>