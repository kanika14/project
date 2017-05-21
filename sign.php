<?php
include_once("inc/db.php");
session_start();

/*print_r($_POST);*/

$user_name = trim($_POST['name']);
$user_email = trim($_POST['email']);
$user_phone = trim($_POST['phone']);
$user_password = trim($_POST['pass']);
$user_id = trim($_POST['colgid']);
$user_type = trim($_POST['type']);
$user_dept = trim($_POST['dept']);
$user_dob = trim($_POST['dob']);
$user_gender = trim($_POST['gender']);

$sql2 = "SELECT * FROM myguests WHERE email = '$user_email'";
$result = $conn->query($sql2);

		$sql = "INSERT INTO myguests (colgid, name, password, email,phone,type,dept,dob,gender) VALUES ('$user_id','$user_name','$user_password','$user_email','$user_phone', '$user_type', '$user_dept', '$user_dob', '$user_gender')";
		if ($conn->query($sql) === TRUE) {
			$_SESSION['user_name'] = $user_name;
			$_SESSION['user_email'] = $user_email;
			$_SESSION['user_phone'] = $user_phone;
			$_SESSION['user_type'] = $user_type;
			$_SESSION['user_id'] = $user_id;
			$_SESSION['user_dob'] = $user_dob;
			$_SESSION['user_gender'] = $user_gender;
			$_SESSION['user_dept'] = $user_dept;
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
 
 ?>