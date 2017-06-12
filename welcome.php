<?php 
session_start();

if(!isset($_SESSION['user_name'])){
	header("Location: index.php");
}
include_once('inc/header.php');

$user_type = $_SESSION['user_type'];
$name = $_SESSION['user_name'];
 ?>

 <div class="container  section-team">
 	<div class="row welcome">
 		<div class="col s12">
 			<h1 class="center">Hey <?php echo $name; ?> Welcome to the <?php echo $user_type; ?> Section</h1>
 		</div>
 		<div class="col s4">
 			<div class="card card-profile">
 				<div class="card-avatar">
 					<img class="img" src="img/profile.png" width="100%" height="100%">
 				</div>
 				<h4 class="title"><?php echo $_SESSION['user_name']; ?></h4>
 				<h6><?php echo $_SESSION['user_type']; ?></h6>
 				<p class="card-description">
 					Smile and let everyone know that today, you're a lot stronger than you were yesterday...<br>
 					- Drake
 				</p>
 				<?php if ($user_type == 'student') { ?>	
 				<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
 			<?php 	} ?>
 				<div class="footer">
 				<?php if ($user_type == 'admin') { ?>
 					<a class="waves-effect waves-light btn" href="students.php">Manage Students</a>
 					<?php } ?>
 				</div>
 			</div>
 		</div>
 		<div class="col s2"></div>
 		<?php if ($user_type == 'admin') { ?>
 			
 		
 		<div class="col s4">
 		<h3>Search Students</h3>
 			<form>
		      <div class="input-field">
		        <input id="search" type="search" onkeyup="searchStudents()" required>
		        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
		        <i class="material-icons">close</i>
		      </div>
 			</form>
 		</div>
 	 <?php } ?>
 	</div>
 </div>


<div class="container">
	<div class="row">
 		<div class="col s6">
 			<div class="col s12 resultsdiv"></div>
 		</div>
 	</div>
</div> 


<?php include_once 'inc/footer.php'; ?>