<html>
<head> <title> Добавление ведомости </title> 
 <meta charset="utf-8">
</head>
<body>
<H2>Регистрация:</H2>
<form action="save_new_zv.php" metod="get">
 Дата: <input name="data" size="20" type="date" required >
 <?php
$result=mysqli_query($linkmy, "SELECT id_stud, stud_fio, stud_faculty, stud_gr, stud_no_zk, stud_no_tel
FROM stud "); // запрос на выборку сведений о пользователях
echo "<br>";
echo "Студент: <select name='id_stud'>";

		while ($row = mysqli_fetch_array($result)) {
			    print "<p> <option value='" . $row['id_stud'] ."'>" . $row['stud_fio'] ."</option>";
		}
		
		echo "</select>";
		
 $result=mysqli_query($linkmy, "SELECT * FROM subject"); // запрос на выборку сведений о пользователях
echo "<br>";
echo "Предмет: <select name='id_subj'>";
		while ($row = mysqli_fetch_array($result)) {
			    print "<p> <option value='" . $row['id_subj'] ."'>" . $row['subj_name'] ."</option>";	
		}
		echo "</select>";

?>
<br>Оценка: <input name="grade" size="5" type="number" min="2" max="5" required >
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться к списку студентов </a>
</body>
</html>
