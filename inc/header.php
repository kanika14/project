<?php 
if(!session_id())
	session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/validation.min.js"></script>
	<script type="text/javascript" src="js/register.js"></script>
	<link href="css/font.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<nav>
	  <div class="nav-wrapper">
	    <a href="index.php" class="brand-logo"><img class="logo" src="img/logo.jpg"></a>
	    <ul class="right hide-on-med-and-down">
	      <li><a href="index.php">Home</a></li>
	      <li><a href="welcome.php">Profile</a></li>
	      <?php if (isset($_SESSION['user_name'])) { ?>
	     	<li><a href="signup.php">Add User</a></li>
	     	<li><a href="logout.php">Logout</a></li>
	     	<li><a href="#!"><?php echo $_SESSION['user_type']; ?></a></li>
	     <?php  } else { ?>
	      	<li><a href="careers.php">Careers</a></li>
	      	<li><a href="photos.php">Photos</a></li>
	      	<li><a href="videos.php">Videos</a></li>
	      	<li><a href="contact.php">Contact Us</a></li>
	      	<li><a href="login.php">Login</a></li>
	     <?php  } ?>
	    </ul>
	  </div>
	</nav>
</body>
</html>