
<?php
require "isAdmin.php";
require "connectToDB.php";

 $zapros="DELETE FROM zachved WHERE id_zachved=" . $_GET['id'];
 mysqli_query($linkmy,$zapros);
 header("Location: index.php");
 exit;
?>