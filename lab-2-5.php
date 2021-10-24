<?php
$var = 5;
$i = 0;
$istr= "";
$istr2= "";
while (++$i<=$var){
	$istr=  $istr . " " . $i;
	$istr2= $i . " " . $istr2;
}
echo $istr . "<br>" . $istr2;
?>
	
