
<html>
<head>
<title> Редактирование ведомости </title>
  <meta charset="utf-8">
</head>
<body>

<?php

require "isUser.php";
require "connectToDB.php";

//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

 mysqli_query($linkmy, 'SET NAMES utf8');
 
 $rows=mysqli_query($linkmy, "SELECT id_zachved, zv_data, id_stud, id_subj, zv_grade, zv_npp FROM zachved WHERE 
id_zachved=".$_GET['id']);

 while ($st = mysqli_fetch_array($rows)) {
 $id=$_GET['id'];
 $data = $st['zv_data'];
 $stud = $st['id_stud'];
 $subj = $st['id_subj'];
 $grade = $st['zv_grade'];
 $npp = $st['zv_npp'];
 }
print "<form action='save_edit_zv.php' metod='get'>";
print "Дата: <input name='data' size='20' type='date'
value='".$data."'>";
$result=mysqli_query($linkmy, "SELECT id_stud, stud_fio, stud_faculty, stud_gr, stud_no_zk, stud_no_tel
FROM stud "); // запрос на выборку сведений о пользователях
echo "<br>";
echo "Студент: <select name='id_stud'>";

		while ($row = mysqli_fetch_array($result)) {
			if ($stud==$row['id_stud']){
		    print "<p> <option selected value='" . $row['id_stud'] ."'>" . $row['stud_fio'] ."</option>";
		}else{
			    print "<p> <option value='" . $row['id_stud'] ."'>" . $row['stud_fio'] ."</option>";
		}
		}
		echo "</select>";



 $result=mysqli_query($linkmy, "SELECT * FROM subject"); // запрос на выборку сведений о пользователях
echo "<br>";
echo "Предмет: <select name='id_subj'>";
		while ($row = mysqli_fetch_array($result)) {
			if ($subj==$row['id_subj']){
		    print "<p> <option selected value='" . $row['id_subj'] ."'>" . $row['subj_name'] ."</option>";
		}else{
			    print "<p> <option value='" . $row['id_subj'] ."'>" . $row['subj_name'] ."</option>";	
		}
		}
		echo "</select>";
print "<br>Оценка: <input name='grade' size='5' type='text' min='2' max='5'
value='".$grade."'>";
print "<br>НПП: <input name='npp' size='5' type='number' min='1' max='10'
value='".$npp."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку
таблиц </a>";
?>

</body>
</html>
