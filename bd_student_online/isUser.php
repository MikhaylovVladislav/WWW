<?php
session_start();
if(isset($_SESSION['logged_user'])) {
}else{
	header('Location: /public_html/bd_student_online/autorization/login.php');
exit;
}
?>