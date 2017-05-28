<?php 
session_start();

if(!isset($_SESSION['user_name'])){
	header("Location: index.php");
}
include_once('inc/header.php');
 ?>
<div class="container">
	<div class="row">
		<div class="col s12 center">
		<?php if ($_SESSION['user_gender'] == 'female') { ?>
			<h4><?php echo  "Welcome Miss".strtoupper($_SESSION['user_name']); ?></h4>
		<?php  }  else { ?>
		<h4><?php echo  "Welcome Mr. ".strtoupper($_SESSION['user_name']); ?></h4>
		<?php } ?>
		</div>
		<div class="col s6 center"></div>
		<div class="col s6 center">
			<?php if (isset($_SESSION['user_type'])) {
				if ($_SESSION['user_type'] == 'teacher') { ?>
					<a class="waves-effect waves-light btn" href="students.php">Manage Students</a>	
			<?php 	}
			} ?>
		</div>
	</div>
</div>

<div class="container">
 	<div class="row">
 		<div class="col s6">
 			<form>
		      <div class="input-field">
		        <input id="search" type="search" onkeyup="searchStudents()" required>
		        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
		        <i class="material-icons">close</i>
		      </div>
 			</form>
 		</div>
 		<div class="col s6"></div>
 		</div>
 		<div class="row">
 		<div class="col s6">
 			<div class="col s12 resultsdiv"></div>
 		</div>
 	</div>
</div> 