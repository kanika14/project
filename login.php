<?php 
include('inc/header.php');
include_once("inc/db.php");
?>
<title>Login</title>


<div class="container" style="background: linear-gradient(to right, rgb(54, 209, 220), rgb(91, 134, 229))">	
	<div class="row" style="padding-top: 75px; padding-bottom: 84px;">
	<div class="col s3"></div>

	<div class="col s6 formdiv">
	  <div class="progress" style="display: none;">
      	<div class="indeterminate"></div>
  	  </div>
	<form class="" method="post" id="login-form">
		<h2 class="form-login-heading center" style="color: cadetblue;">Sign in</h2>
		<div id="error"></div>
		<div class="row">
		<div class="input-field col s12">
	 		<i class="material-icons prefix">email</i>
			<input type="email" class="validate" name="user_email" id="user_email" autocomplete="off">
			<label for="icon_prefix" data-error="wrong" data-success="right">E-mail</label>
		</div>
		</div>
		<div class="row">
		<div class="input-field col s12">
	 		<i class="material-icons prefix">lock</i>
			<input type="password" class="validate" name="password" id="password" autocomplete="off" />
			<label for="icon_prefix" data-error="wrong" data-success="right">Password</label>
		</div>
		</div>
		<div class="row">
		<div class="form-group input-field inline right">
			<button type="submit" class="waves-effect waves-light btn" name="login_button" id="login_button">
			<i class="material-icons right">send</i>Login</button>
		</div>
		</div> 
	</form>	
	</div>	
	<div class="col s3"></div>	
	</div>
</div>
