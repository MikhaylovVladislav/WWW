<HTML>
<TITLE> Таблица умножения </TITLE>
<BODY>
<TABLE border = 1>
<?php
for ($i=0; $i<=9; $i++){
	echo("<tr>");
	for ($k=1; $k<=10; $k++){
		$p=$k + ($i*10);
		if ($k%2 == 0){
		echo ("<td align = center> <font color=red>");
		}else {
			echo ("<td align = center> <font color=black>");
		}
		echo($p);
		echo("</font> </td>");
		
	}
	echo("</tr>");
}
?>
</TABLE>
</BODY>
</HTML>

	
