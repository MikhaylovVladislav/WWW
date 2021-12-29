

<html>
<head> <title> Сведения о прользователях сайта </title>
<style>
fieldset.com{
background-color:#B5B8B1;
}
fieldset {
background-color:#FAEEDD;
}

legend {
    background-color: #000;
    color: #fff;
    padding: 3px 6px;
}
</style>
 </head>
<body>
<fieldset class ="com">
<fieldset>
<legend> Студенты </legend>
<table border="1">
<tr> 
 <th> id </th> <th> ФИО </th> <th> Факультет </th> <th> Группа </th> <th> Номер зачетной книжки </th> <th> Номер телефона </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>

<?php
require "isUser.php";
session_start();
if(isset($_SESSION['logged_user']) ) {
$filed="datareg.txt";
 $linkmy=mysqli_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($linkmy, 'SET NAMES utf8'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($linkmy, "students") or die("Нет такой таблицы!");
 $result=mysqli_query($linkmy, "SELECT id_stud, stud_fio, stud_faculty, stud_gr, stud_no_zk, stud_no_tel
FROM stud"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row['id_stud'] . "</td>";
 echo "<td>" . $row['stud_fio'] . "</td>";
  echo "<td>" . $row['stud_faculty'] . "</td>";
 echo "<td>" . $row['stud_gr'] . "</td>";
  echo "<td>" . $row['stud_no_zk'] . "</td>";
  echo "<td>" . $row['stud_no_tel'] . "</td>";
 echo "<td><a href='edit.php?id=" . $row['id_stud']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 if($_SESSION['status'] == 2) { echo "<td><a href='delete.php?id=" . $row['id_stud']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 }else { echo "<td>Недоступно</td>"; 
 }
 echo "</tr>";
 
  // Для записи
 $num=$row['id_stud'];
 $rez[$num]=$row['stud_fio'] . ';' . $row['stud_faculty']. ';' . $row['stud_gr'] .';' . $row['stud_no_zk'];
 

}

print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего студентов: $num_rows </p>");
}
?>

<p> <a href="new.html"> Добавить студента </a>
</fieldset>

<fieldset>
<legend> Предметы </legend>
<table border="1">
<tr> 
 <th> id </th> <th> Название </th> <th> ФИО препода </th> 
 <th> Редактировать </th> <th> Уничтожить </th> </tr>

<?php
session_start();
if(isset($_SESSION['logged_user']) ) {
 $linkmy=mysqli_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($linkmy, 'SET NAMES utf8'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($linkmy, "students") or die("Нет такой таблицы!");
 $result=mysqli_query($linkmy, "SELECT id_subj, subj_name ,subj_fio_prepod
FROM subject"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row['id_subj'] . "</td>";
 echo "<td>" . $row['subj_name'] . "</td>";
  echo "<td>" . $row['subj_fio_prepod'] . "</td>";

 echo "<td><a href='edit_subj.php?id=" . $row['id_subj']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
if($_SESSION['status'] == 2) { echo "<td><a href='delete_subj.php?id=" . $row['id_subj']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
} else { echo "<td>Недоступно</td>";

}
 echo "</tr>";
 
 // Для записи
 $numsubj=$row['id_subj'];
 $rezsubj[$numsubj]=$row['subj_name'] . ';' . $row['subj_fio_prepod'];
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего предметов: $num_rows </p>");
 
 
  
}
?>

<p> <a href="new_subj.html"> Добавить предмет </a>
</fieldset>

<fieldset>
<legend> Зачетная ведомость </legend>
<table border="1">
<tr> 
 <th> Дата </th> <th> Ид студента </th> <th> Ид предмета </th><th> Оценка </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>

<?php
session_start();
if(isset($_SESSION['logged_user']) ) {
 $linkmy=mysqli_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($linkmy, 'SET NAMES utf8'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($linkmy, "students") or die("Нет такой таблицы!");
 $result=mysqli_query($linkmy, "SELECT id_zachved, zv_data ,id_stud, id_subj, zv_grade, zv_npp
FROM zachved"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";

 echo "<td>" . $row['zv_data'] . "</td>";
  echo "<td>" . $row['id_stud'] . "</td>";
   echo "<td>" . $row['id_subj'] . "</td>";
  echo "<td>" . $row['zv_grade'] . "</td>";

 echo "<td><a href='edit_zv.php?id=" . $row['id_zachved']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 if($_SESSION['status'] == 2) { echo "<td><a href='delete_zv.php?id=" . $row['id_zachved']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 }else { echo "<td>Недоступно</td>"; 
 }
 echo "</tr>";
 
 $stnum=$row['id_stud'];
 $subjnum=$row['id_subj'];
  // Запись в файл
 $numzv=$row['id_zachved'];
 $rezzv[]=$row['zv_npp'] . ';' . $rez[$stnum] . ';' . $row['zv_data'] . ';' . $rezsubj[$subjnum]. ';' . $row['zv_grade'] . "\n";

 
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
for ($a=0;$a<$num_rows;$a++){
	
 $rezcom=$rezcom.$rezzv[$a];
}
file_put_contents($filed, $rezcom);

print("<P>Всего предметов: $num_rows </p>");
}
?>

<p> <a href="new_zv.html"> Добавить ведомость </a>
</fieldset>


<fieldset>
<legend> Экспорт таблиц </legend>
<p> <a href="gen_pdf.php"> Генерация ПДФ (TCPDF) </a>
<p> <a href="gen_xls.php"> Генерация Excel (xls) </a>
</fieldset>


<?php
session_start();
if($_SESSION['status'] == 2) {
 echo "<fieldset>";
echo "<legend> Админ панель </legend>";
echo "<table border='1'>";
echo "<tr>" ;
 echo "<th> Ид </th> <th> Логин </th> <th> Тип доступа </th> <th> Редактировать </th> <th> Уничтожить </th> </tr>";


if(isset($_SESSION['logged_user']) ) {
	 
	
 $linkmy=mysqli_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($linkmy, 'SET NAMES utf8'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($linkmy, "students") or die("Нет такой таблицы!");
 $result=mysqli_query($linkmy, "SELECT *
FROM users"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row['id'] . "</td>";
 echo "<td>" . $row['login'] . "</td>";
   echo "<td>" . $row['type'] . "</td>";
 echo "<td><a href='edit_user.php?id=" . $row['id']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete_user.php?id=" . $row['id']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
 
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
for ($a=0;$a<$num_rows;$a++){

}

print("<P>Всего пользователей: $num_rows </p>");
}
echo "<p> <a href='autorization/new_user.php'> Добавить пользователя </a>";
echo "</fieldset>";
}
?>



<fieldset>
<legend> Профиль </legend>

   <?php
    require "Autorization/rb.php";
   $id=$_SESSION['id'];
    echo "<td><a href='edit_user.php?id=" . $id  . "'>Редактировать свои данные</a></td>";
	?>
   

  <p> <a href="Autorization/logout.php">Выйти</a>
</fieldset>


</fieldset>
</body> </html>
 

 


 

