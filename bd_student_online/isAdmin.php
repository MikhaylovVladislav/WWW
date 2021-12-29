<?php
session_start();
if(isset($_SESSION['logged_user']) and ($_SESSION['status']) == 2 ) {
}else{
	header('Location: /www/bd_student_local/index.php');
exit;
}
?>