<?php
if (isset($_POST["obr"])) {
if ($_POST["a"]==$_POST["b"]) { echo(" Числа равны");
 } else {
 if ($_POST["a"]>$_POST["b"]) {
 echo($_POST["a"]);
 } else { echo($_POST["b"]); }
 } }
?>