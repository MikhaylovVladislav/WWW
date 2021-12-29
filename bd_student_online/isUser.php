<?php
session_start();
if(isset($_SESSION['logged_user'])) {
}else{
	header('Location: /www/bd_student_local/autorization/login.php');
exit;
}
?>