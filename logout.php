<?php 
session_start();
	unset($_SESSION['user_name']);
	unset($_SESSION['user_email']);
	unset($_SESSION['user_phone']);
	unset($_SESSION['user_type']);
	unset($_SESSION['user_id']);
	unset($_SESSION['user_dob']);
	unset($_SESSION['user_gender']);
	unset($_SESSION['user_dept']);
	if(session_destroy()) {
		header("Location: index.php");
	}
 ?>