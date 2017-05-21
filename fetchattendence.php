<?php 
	include_once("inc/db.php");
	session_start();

	$nameofstudent = $_POST['shivam'];

	echo $nameofstudent;


	$sql2 = "SELECT * FROM myguests where colgid = '$nameofstudent'";
	$resultset = mysqli_query($conn, $sql2) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);

	if ($row) {
		$_SESSION['student_name'] = $row['name'];
		$_SESSION['student_email'] = $row['email'];
		$_SESSION['student_phone'] = $row['phone'];
		$_SESSION['student_type'] = $row['type'];
		$_SESSION['student_colgid'] = $row['colgid'];
		$_SESSION['student_dob'] = $row['dob'];
		$_SESSION['student_gender'] = $row['gender'];
		$_SESSION['student_dept'] = $row['dept'];
		$_SESSION['student_present'] = $row['present'];
		$_SESSION['student_total'] = $row['totaldays'];
	}


?>
