<?php
session_start();
if(isset($_SESSION['logged_user']) and ($_SESSION['status']) == 2 ) {
}else{
	header('Location: /bd_student_online/index.php');
exit;
}
?>