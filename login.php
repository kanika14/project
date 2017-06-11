<?php 
include('inc/header.php');
include_once("inc/db.php");
?>
<title>Login</title>

<div id="register_output"></div>
<div class="container" style="background: #3f51b5;">	
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
	 		
			<input type="email" class="validate" name="user_email" id="user_email" autocomplete="off">
			<label for="icon_prefix" data-error="wrong" data-success="right">E-mail</label>
		</div>
		</div>
		<div class="row">
		<div class="input-field col s12">
	 		
			<input type="password" class="validate" name="password" id="password" autocomplete="off" />
			<label for="icon_prefix" data-error="wrong" data-success="right">Password</label>
		</div>
		</div>
		<div class="row text-center">
		<div class="form-group input-field inline right">
			<button type="submit" class="waves-effect fullwidth pink waves-light btn" name="login_button" id="login_button">
			Login</button>
		</div>
		</div> 
	</form>	
	</div>	
	<div class="col s3"></div>	
	</div>
</div>
