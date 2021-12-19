<html>
<head> <title> Сведения о прользователях сайта </title> </head>
<body>

<h2>Студенты:</h2>
<table border="1">
<tr> 
 <th> ФИО </th> <th> Факультет </th> <th> Группа </th> <th> Номер зачетной книжки </th> <th> Номер телефона </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>


<?php

 $linkmy=mysqli_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($linkmy, 'SET NAMES utf8'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($linkmy, "students") or die("Нет такой таблицы!");
 $result=mysqli_query($linkmy, "SELECT id_stud, stud_fio, stud_faculty, stud_gr, stud_no_zk, stud_no_tel
FROM stud"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";

 echo "<td>" . $row['stud_fio'] . "</td>";
  echo "<td>" . $row['stud_faculty'] . "</td>";
 echo "<td>" . $row['stud_gr'] . "</td>";
  echo "<td>" . $row['stud_no_zk'] . "</td>";
  echo "<td>" . $row['stud_no_tel'] . "</td>";
 echo "<td><a href='edit.php?id=" . $row['id_stud']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete.php?id=" . $row['id_stud']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего студентов: $num_rows </p>");
 
?>

<p> <a href="new.html"> Добавить студента </a>
</body> </html>