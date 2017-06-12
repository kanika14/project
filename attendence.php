<?php 
session_start();
if(!isset($_SESSION['user_name'])){
	header("Location: index.php");
}
include_once('inc/header.php');
 ?>


<div class="container">
	<div class="row">
		<div class="col s12">
			<h1 class="center">Update Students Info Here</h1>
		</div>
		<div class="col s12">
			<div class="col s12 updateform" method="post">
			      <div class="row">
			        <div class="input-field col s4">
			          <input  id="s_name" disabled type="text" class="validate" value="<?php echo $_SESSION['student_name']; ?>">
			          <label for="first_name">Name</label>
			        </div>
			        <div class="input-field col s4">
			          <input  id="s_email" disabled type="text" class="validate" value="<?php echo $_SESSION['student_email']; ?>">
			          <label for="last_name">Email</label>
			        </div>
			        <div class="input-field col s4">
			          <input disabled id="s_phone" value="<?php echo $_SESSION['student_phone']; ?>" type="text" class="validate">
			          <label for="disabled">Phone</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s4">
			          <input  id="s_colgid" disabled type="text" class="validate" value="<?php echo $_SESSION['student_colgid']; ?>">
			          <label for="password">College Id</label>
			        </div>
			        <div class="input-field col s4">
			          <input  id="s_branch" disabled type="email" class="validate" value="<?php echo $_SESSION['student_dept']; ?>">
			          <label for="email">Branch</label>
			        </div>
			        <div class="input-field col s4">
			          <input  id="s_total" type="text" class="validate" value="<?php echo $_SESSION['student_total']; ?>">
			          <label for="email">Total Days</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s4">
			          <input  id="s_present" type="text" class="validate" value="<?php if (isset($_SESSION['new_present'])) {
			          	echo $_SESSION['new_present'];
			          } else {
			          	echo $_SESSION['student_present'];
			          	} ?>">
			          <label for="email">No of Days Present</label>
			        </div>
			      </div>
			      <div class="row">
			      	<a class="waves-effect waves-light btn updateattendence"><i class="material-icons right">autorenew</i>Update</a>
			      </div>
			  </div>

		</div>
	</div>
</div>

