<?php
if($_POST["d"]=="plus"){
$c=$_POST["a"]+$_POST["b"];
echo ("сумма чисел = $c");
}else{
	$c=$_POST["a"]*$_POST["b"];
	echo ("произведение чисел = $c");
}
echo ("<br> <a href='f3.html'> Вернуться назад </a>");
?>