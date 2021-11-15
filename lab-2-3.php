<?php
$a="A";
switch ($a) {
	case 'A' :
	    echo 'Переменная имеет значение "А"'; 
		
	case 'B' :
	    echo 'Переменная имеет значение "B"'; 
		break;
	default:
	    echo 'Ответ не найден';
}

 echo '<br><br><br><br>'.'Лабораторная работа №2: ';
echo '<br>'." ".'<br>'; // багованная строка

$cust['cnum']="2001";
$cust['cname']="Hoffman";
$cust['city']="London";
$cust['snum']="1001";

foreach($cust as $key => $key_value) {
  echo "Ключ = " . $key . ", Значение = " . $key_value .  '<br>';
}
?>
	
