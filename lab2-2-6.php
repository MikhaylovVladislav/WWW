<?php
include "lab2-Flibrary.php";

$a = 4;
$b = 5;
$c = 40;

echoZadanie("Найти сумму элементов A(i,j) массива A(m,n), имеющих заданную разность индексов i-j=k.
Число k целое, но не обязательно положительное.");

$arr=Create2MernArrInRange($a,$b,$c);
sum($arr,$a,$b,2);
$OutTableArr=CreateTable($arr);



?>