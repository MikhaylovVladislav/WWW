<?php
if($_POST["d"]=="plus"){
$c=$_POST["a"]+$_POST["b"];
if ($_POST["f"].checked!==checked){
echo ($_POST['a']."+".$_POST['b']."=".$c);
} else {
echo ("сумма чисел = $c");
}
}else{
	$c=$_POST["a"]*$_POST["b"];
	if (isset($_POST["f"])){
echo ($_POST['a']."*".$_POST['b']."=".$c);
} else {
	echo ("произведение чисел = $c");
}
}
echo ("<br> <a href='f4.html'> Вернуться назад </a>");
?>