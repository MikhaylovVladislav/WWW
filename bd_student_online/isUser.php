<?php
session_start();
if(isset($_SESSION['logged_user'])) {
}else{
	header('Location: /bd_student_online/Autorization/login.php');
exit;
}
?>