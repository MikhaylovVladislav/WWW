

<?php
require "isAdmin.php";
require "connectToDB.php";

 $zapros="DELETE FROM subject WHERE id_subj=" . $_GET['id'];
 mysqli_query($linkmy,$zapros);
 header("Location: index.php");
 exit;
?>