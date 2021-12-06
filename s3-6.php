<?php
$arr = str_split($_POST["t"]);
$k1=0;
$k1=0;
foreach ($arr as $char) {
 if ($_POST["ch1"]==$char){
	 $k1++;
}
if ($_POST["ch2"]==$char){
	 $k2++;
}
}

$words = explode(" ", $_POST["t1"]);
$reversed = array_reverse($words);

$arr2 = str_split($_POST["t2"]);
foreach ($arr2 as $char) {
 if(ctype_upper($char))
    {
		
		$rs++; // прописной
	}else {
$rc++; // строчный	

	}
}

$x=$rs+$rc;
$xs=($rs*100)/$x; // прописные
$xc=($rc*100)/$x; // строчные

echo "Символ ".$_POST["ch1"] ." встречается в тексте ". "$k1". " раз(а)" ."<br>";
echo "Символ ".$_POST["ch2"] ." встречается в тексте ". "$k2". " раз(а)" . "<br>";

foreach ($reversed as $word) {
	echo "$word". " ";
}
echo "<br>";

echo "Прописные буквы составляют ". "$xs" . "%". " к общему числу символов "."$x";
echo "<br>";
echo "Строчные буквы составляют ". "$xc" . "%". " к общему числу символов "."$x";

?>