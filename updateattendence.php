	<?php 
	include_once("inc/db.php");
	session_start();

	$s_name = $_POST['s_name'];
    $s_email = $_POST['s_email'];
    $s_phone = $_POST['s_phone'];
    $s_colgid = $_POST['s_colgid'];
    $s_branch = $_POST['s_branch'];
    $s_present = $_POST['s_present'];
    $s_total = $_POST['s_total'];

	$sql = "UPDATE myguests SET present = '$s_present' WHERE colgid = '$s_colgid'";
   	$sql2 = "SELECT * FROM myguests where colgid = '$s_colgid'";
	$resultset = mysqli_query($conn, $sql2) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);


		if ($conn->query($sql) === TRUE) {
			$_SESSION['new_name'] = $row['name'];
			$_SESSION['new_email'] = $row['email'];
			$_SESSION['new_phone'] = $row['phone'];
			$_SESSION['new_colgid'] = $row['colgid'];
			$_SESSION['new_dept'] = $row['dept'];
			$_SESSION['new_present'] = $s_present;
			$_SESSION['new_total'] = $row['totaldays'];
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

?>
 