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

echo '<br>' . 'Ассоциативный массив: ';
echo '<br>';
$cust['cnum']="2001";
$cust['cname']="Hoffman";
$cust['city']="London";
$cust['snum']="1001";

foreach($cust as $key => $key_value) {
  echo "Ключ = " . $key . ", Значение = " . $key_value .  '<br>';
}

echo '<br>'.'Добавление нового элемента в ассоциативный массив';
echo '<br>';
$cust['rating']="100";
foreach($cust as $key => $key_value) {
  echo "Ключ = " . $key . ", Значение = " . $key_value .  '<br>';
}

echo '<br>'.'Сортировка ассоциативного массива по значениям';
echo '<br>';
$custS=$cust;
array_multisort($custS);
foreach($custS as $key => $key_value) {
  echo "Ключ = " . $key . ", Значение = " . $key_value .  '<br>';
}

echo '<br>'.'Сортировка ассоциативного массива по ключу';
echo '<br>';
$custKS=$cust;
ksort($custKS);
foreach($custKS as $key => $key_value) {
  echo "Ключ = " . $key . ", Значение = " . $key_value .  '<br>';
}

echo '<br>'.'Сортировка ассоциативного массива с помощью функци sort()';
echo '<br>';
sort($cust);
foreach($cust as $key => $key_value) {
  echo "Ключ = " . $key . ", Значение = " . $key_value .  '<br>';
}


?>
	
