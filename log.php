<?php
include_once("inc/db.php");
session_start();

if(isset($_POST['login_button'])) {
	$user_email = trim($_POST['user_email']);
	$user_password = trim($_POST['password']);
	
	$sql = "SELECT email, password,name,phone,colgid,gender,dept,dob,type FROM myguests WHERE email='$user_email'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);	
		
	if($row['password']==$user_password){				
		echo "ok";
		$_SESSION['user_name'] = $row['name'];
		$_SESSION['user_email'] = $row['email'];
		$_SESSION['user_phone'] = $row['phone'];
		$_SESSION['user_type'] = $row['type'];
		$_SESSION['user_id'] = $row['colgid'];
		$_SESSION['user_dob'] = $row['dob'];
		$_SESSION['user_gender'] = $row['gender'];
		$_SESSION['user_dept'] = $row['dept'];
	} else {				
		echo "email or password does not exist."; // wrong details 
	}		
}



?>