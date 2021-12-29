
<?php
require "isAdmin.php";
require "connectToDB.php";

 $zapros="DELETE FROM stud WHERE id_stud=" . $_GET['id'];
 mysqli_query($linkmy,$zapros);
 header("Location: index.php");
 exit;
?>